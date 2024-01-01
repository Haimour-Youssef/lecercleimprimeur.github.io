@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('caracteristiques.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.caracteristiques.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.caracteristiques.inputs.nom')</h5>
                    <span>{{ $caracteristique->nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.caracteristiques.inputs.produit_id')</h5>
                    <span
                        >{{ optional($caracteristique->produit)->nom ?? '-'
                        }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('caracteristiques.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Caracteristique::class)
                <a
                    href="{{ route('caracteristiques.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    @can('view-any', App\Models\Detail::class)
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title w-100 mb-2">Details</h4>

            <livewire:caracteristique-details-detail
                :caracteristique="$caracteristique"
            />
        </div>
    </div>
    @endcan
</div>
@endsection
