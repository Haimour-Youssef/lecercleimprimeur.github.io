@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('commandes.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.commandes.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.commandes.inputs.ref')</h5>
                    <span>{{ $commande->ref ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.commandes.inputs.produit_id')</h5>
                    <span>{{ optional($commande->produit)->nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.commandes.inputs.user_id')</h5>
                    <span>{{ optional($commande->user)->nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.commandes.inputs.qauntite')</h5>
                    <span>{{ $commande->qauntite ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.commandes.inputs.prixTotale')</h5>
                    <span>{{ $commande->prixTotale ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.commandes.inputs.statu')</h5>
                    <span>{{ $commande->statu ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('commandes.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Commande::class)
                <a href="{{ route('commandes.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
