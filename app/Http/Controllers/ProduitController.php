<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\View\View;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexClient(Request $request,$categorie): View
    {
        // dd(Categorie::find(Categorie::where("nom", $categorie)->get()->first()->id));
        return view('app.client.products', ["categorie" => Categorie::find(Categorie::where("nom", $categorie)->get()->first()->id)]);
    }
    public function showProduct(Request $request,Produit $produit): View
    {
        // dd(Categorie::find(Categorie::where("nom", $categorie)->get()->first()->id));
        // return view('app.client.commande', ["$produit" => Produit::find(Produit::where("nom", $produit)->get()->first()->id)]);
        // dd($produit);
        return view('app.client.commande', ["produit" => $produit]);
    }
    public function index(Request $request): View
    {
        $this->authorize('view-any', Produit::class);

        $search = $request->get('search', '');

        $produits = Produit::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.produits.index', compact('produits', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Produit::class);

        $categories = Categorie::pluck('nom', 'id');

        return view('app.produits.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->authorize('create', Produit::class);

        $validated = $request->validate([
            'thumbnail' => ['nullable', 'file'],
            'nom' => ['nullable', 'max:255', 'string'],
            'categorie_id' => ['required', 'exists:categories,id'],
            'description' => ['nullable', 'max:255', 'string'],
        ]);
        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request
                ->file('thumbnail')
                ->store('public');
        }

        $produit = Produit::create($validated);

        return redirect()
            ->route('produits.edit', $produit)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Produit $produit): View
    {
        $this->authorize('view', $produit);

        return view('app.produits.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Produit $produit): View
    {
        $this->authorize('update', $produit);

        $categories = Categorie::pluck('nom', 'id');

        return view('app.produits.edit', compact('produit', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit): RedirectResponse
    {
        $this->authorize('update', $produit);

        $validated = $request->validate([
            'thumbnail' => ['nullable', 'file'],
            'nom' => ['nullable', 'max:255', 'string'],
            'categorie_id' => ['required', 'exists:categories,id'],
            'description' => ['nullable', 'max:255', 'string'],
        ]);
        if ($request->hasFile('thumbnail')) {
            if ($produit->thumbnail) {
                Storage::delete($produit->thumbnail);
            }

            $validated['thumbnail'] = $request
                ->file('thumbnail')
                ->store('public');
        }

        $produit->update($validated);

        return redirect()
            ->route('produits.edit', $produit)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Produit $produit
    ): RedirectResponse {
        $this->authorize('delete', $produit);

        if ($produit->thumbnail) {
            Storage::delete($produit->thumbnail);
        }

        $produit->delete();

        return redirect()
            ->route('produits.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
