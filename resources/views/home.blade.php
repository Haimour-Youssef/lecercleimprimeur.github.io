@extends('layouts.app')
@php
if (!function_exists("getStatusCommande")){
    function getStatusCommande($status)
    {
        switch ($status) {
            case 'En attente':
                return 'warning';
                break;
            case 'Livré':
                return 'success';
                break;
            case 'Annulé':
                return 'danger';
                break;

            default:
                return 'info';
                break;
        }
    }
}
@endphp
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">En Cours</span>
                        <span class="info-box-number">
                            {{ $statCommandes['enCours'] }}
                        </span>
                    </div>

                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fa-solid fa-circle-exclamation"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Annulé</span>
                        <span class="info-box-number">{{ $statCommandes['annule'] }}</span>
                    </div>

                </div>

            </div>


            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fa-regular fa-circle-check"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Livré</span>
                        <span class="info-box-number">{{ $statCommandes['livre'] }}</span>
                    </div>

                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fa-solid fa-clock"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">En Attente</span>
                        <span class="info-box-number">{{ $statCommandes['enAttente'] }}</span>
                    </div>

                </div>

            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div> --}}
                <div class="card">
                    <div class="card-header border-transparent">
                        <h3 class="card-title">Les derniers commandes</h3>
                        {{-- <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div> --}}
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                                <thead>
                                    <tr>
                                        <th>Référence</th>
                                        <th>Produit</th>
                                        <th>Statut</th>
                                        <th>Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($commandes as $commande)
                                        <tr>
                                            <td><a href="pages/examples/invoice.html">{{ $commande->ref }}</a></td>
                                            <td>{{ $commande->produit->nom }}</td>
                                            <td><span class="badge badge-{{getStatusCommande($commande->statu)}}">{{ $commande->statu }}</span></td>
                                            <td>
                                                <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                    {{ $commande->qauntite }}</div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>Empty table</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="card-footer clearfix">
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header border-0">
                        <h3 class="card-title">Online Store Overview</h3>
                        {{-- <div class="card-tools">
                            <a href="#" class="btn btn-sm btn-tool">
                                <i class="fas fa-download"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-tool">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-success text-xl">
                                <i class="ion ion-ios-refresh-empty"></i>
                            </p>
                            <p class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-success"></i> 12%
                                </span>
                                <span class="text-muted">CONVERSION RATE</span>
                            </p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                            <p class="text-warning text-xl">
                                <i class="ion ion-ios-cart-outline"></i>
                            </p>
                            <p class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-up text-warning"></i> 0.8%
                                </span>
                                <span class="text-muted">SALES RATE</span>
                            </p>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-0">
                            <p class="text-danger text-xl">
                                <i class="ion ion-ios-people-outline"></i>
                            </p>
                            <p class="d-flex flex-column text-right">
                                <span class="font-weight-bold">
                                    <i class="ion ion-android-arrow-down text-danger"></i> 1%
                                </span>
                                <span class="text-muted">REGISTRATION RATE</span>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
