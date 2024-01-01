@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('details.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.details.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.details.inputs.thumbnail')</h5>
                    <x-partials.thumbnail
                        src="{{ $detail->thumbnail ? \Storage::url($detail->thumbnail) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.details.inputs.nom')</h5>
                    <span>{{ $detail->nom ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.details.inputs.caracteristique_id')</h5>
                    <span
                        >{{ optional($detail->caracteristique)->nom ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.details.inputs.prix')</h5>
                    <span>{{ $detail->prix ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.details.inputs.detail_id')</h5>
                    <span>{{ optional($detail->detail)->nom ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('details.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Detail::class)
                <a href="{{ route('details.create') }}" class="btn btn-light">
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

            <livewire:detail-details-detail :details="$detail->details" />
        </div>
    </div>
    @endcan
</div>
@endsection
