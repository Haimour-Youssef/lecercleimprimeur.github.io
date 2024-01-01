<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Caracteristique;
use Illuminate\Http\RedirectResponse;

class CaracteristiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Caracteristique::class);

        $search = $request->get('search', '');

        $caracteristiques = Caracteristique::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.caracteristiques.index',
            compact('caracteristiques', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Caracteristique::class);

        $produits = Produit::pluck('nom', 'id');

        return view('app.caracteristiques.create', compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Caracteristique::class);

        $validated = $request->validate([
            'nom' => ['nullable', 'max:255', 'string'],
            'produit_id' => ['nullable', 'exists:produits,id'],
        ]);

        $caracteristique = Caracteristique::create($validated);

        return redirect()
            ->route('caracteristiques.edit', $caracteristique)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        Caracteristique $caracteristique
    ): View {
        $this->authorize('view', $caracteristique);

        return view('app.caracteristiques.show', compact('caracteristique'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        Caracteristique $caracteristique
    ): View {
        $this->authorize('update', $caracteristique);

        $produits = Produit::pluck('nom', 'id');

        return view(
            'app.caracteristiques.edit',
            compact('caracteristique', 'produits')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Caracteristique $caracteristique
    ): RedirectResponse {
        $this->authorize('update', $caracteristique);

        $validated = $request->validate([
            'nom' => ['nullable', 'max:255', 'string'],
            'produit_id' => ['nullable', 'exists:produits,id'],
        ]);

        $caracteristique->update($validated);

        return redirect()
            ->route('caracteristiques.edit', $caracteristique)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Caracteristique $caracteristique
    ): RedirectResponse {
        $this->authorize('delete', $caracteristique);

        $caracteristique->delete();

        return redirect()
            ->route('caracteristiques.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
