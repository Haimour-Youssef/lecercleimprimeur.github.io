@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('users.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.users.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.nom')</h5>
                    <span>{{ $user->nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.prenom')</h5>
                    <span>{{ $user->prenom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.email')</h5>
                    <span>{{ $user->email ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.telephone')</h5>
                    <span>{{ $user->telephone ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.region')</h5>
                    <span>{{ $user->region ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.adresse')</h5>
                    <span>{{ $user->adresse ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.ville')</h5>
                    <span>{{ $user->ville ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.users.inputs.pays')</h5>
                    <span>{{ $user->pays ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('users.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\User::class)
                <a href="{{ route('users.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    @can('view-any', App\Models\Commande::class)
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title w-100 mb-2">Commandes</h4>

            <livewire:user-commandes-detail :user="$user" />
        </div>
    </div>
    @endcan
</div>
@endsection
