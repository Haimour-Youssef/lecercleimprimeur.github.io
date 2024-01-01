<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Commande::class);

        $search = $request->get('search', '');

        $commandes = Commande::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.commandes.index', compact('commandes', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Commande::class);

        $produits = Produit::pluck('nom', 'id');
        $users = User::pluck('nom', 'id');

        return view('app.commandes.create', compact('produits', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Commande::class);

        $validated = $request->validate([
            'ref' => ['required', 'max:255', 'string'],
            'produit_id' => ['required', 'exists:produits,id'],
            'user_id' => ['required', 'exists:users,id'],
            'qauntite' => ['required', 'numeric'],
            'prixTotale' => ['required', 'numeric'],
            'statu' => ['required', 'max:255', 'string'],
        ]);

        $commande = Commande::create($validated);

        return redirect()
            ->route('commandes.edit', $commande)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Commande $commande): View
    {
        $this->authorize('view', $commande);

        return view('app.commandes.show', compact('commande'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Commande $commande): View
    {
        $this->authorize('update', $commande);

        $produits = Produit::pluck('nom', 'id');
        $users = User::pluck('nom', 'id');

        return view(
            'app.commandes.edit',
            compact('commande', 'produits', 'users')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Commande $commande
    ): RedirectResponse {
        $this->authorize('update', $commande);

        $validated = $request->validate([
            'ref' => ['required', 'max:255', 'string'],
            'produit_id' => ['required', 'exists:produits,id'],
            'user_id' => ['required', 'exists:users,id'],
            'qauntite' => ['required', 'numeric'],
            'prixTotale' => ['required', 'numeric'],
            'statu' => ['required', 'max:255', 'string'],
        ]);

        $commande->update($validated);

        return redirect()
            ->route('commandes.edit', $commande)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Commande $commande
    ): RedirectResponse {
        $this->authorize('delete', $commande);

        $commande->delete();

        return redirect()
            ->route('commandes.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
