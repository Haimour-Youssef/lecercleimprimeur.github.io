@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('produits.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.produits.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.produits.inputs.thumbnail')</h5>
                    <x-partials.thumbnail
                        src="{{ $produit->thumbnail ? \Storage::url($produit->thumbnail) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.produits.inputs.nom')</h5>
                    <span>{{ $produit->nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.produits.inputs.categorie_id')</h5>
                    <span>{{ optional($produit->categorie)->nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.produits.inputs.description')</h5>
                    <span>{{ $produit->description ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('produits.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Produit::class)
                <a href="{{ route('produits.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    @can('view-any', App\Models\Caracteristique::class)
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title w-100 mb-2">Caracteristiques</h4>

            <livewire:produit-caracteristiques-detail :produit="$produit" />
        </div>
    </div>
    @endcan
</div>
@endsection
