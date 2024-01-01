<div>
    <div class="mb-4">
        @can('create', App\Models\Commande::class)
        <button class="btn btn-primary" wire:click="newCommande">
            <i class="icon ion-md-add"></i>
            @lang('crud.common.new')
        </button>
        @endcan @can('delete-any', App\Models\Commande::class)
        <button class="btn btn-danger" {{ empty($selected) ? 'disabled' : '' }} onclick="confirm('Are you sure?') || event.stopImmediatePropagation()" wire:click="destroySelected">
            <i class="icon ion-md-trash"></i>
            @lang('crud.common.delete_selected')
        </button>
        @endcan
    </div>

    <x-modal id="user-commandes-modal" wire:model="showingModal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $modalTitle }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div>
                    <x-inputs.group class="col-sm-12 col-lg-6">
                        <x-inputs.text name="commande.ref" label="Ref" wire:model="commande.ref" maxlength="255" placeholder="Ref"></x-inputs.text>
                    </x-inputs.group>

                    <x-inputs.group class="col-sm-12 col-lg-6">
                        <x-inputs.select name="commande.produit_id" label="Produit" wire:model="commande.produit_id">
                            <option value="null" disabled>Please select the Produit</option>
                            @foreach($produitsForSelect as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                            @endforeach
                        </x-inputs.select>
                    </x-inputs.group>

                    <x-inputs.group class="col-sm-12 col-lg-6">
                        <x-inputs.number name="commande.qauntite" label="Qauntite" wire:model="commande.qauntite" step="0.01" placeholder="Qauntite"></x-inputs.number>
                    </x-inputs.group>

                    <x-inputs.group class="col-sm-12 col-lg-6">
                        <x-inputs.number name="commande.prixTotale" label="Prix Totale" wire:model="commande.prixTotale" step="0.01" placeholder="Prix Totale"></x-inputs.number>
                    </x-inputs.group>

                    <x-inputs.group class="col-sm-12 col-lg-6">
                        <x-inputs.select name="commande.statu" label="Statu" wire:model="commande.statu">
                            @php $selected = old('statu', ($editing ? $commande->statu : '')) @endphp
                            <option value="En cours" {{ $selected == 'En cours' ? 'selected' : '' }}>En cours</option>
                            <option value="Livré" {{ $selected == 'Livré' ? 'selected' : '' }}>Livré</option>
                            <option value="En attente" {{ $selected == 'En attente' ? 'selected' : '' }}>En attente</option>
                            <option value="Expédiée" {{ $selected == 'Expédiée' ? 'selected' : '' }}>Expédiée</option>
                            <option value="Annulé" {{ $selected == 'Annulé' ? 'selected' : '' }}>Annulé</option>
                        </x-inputs.select>
                    </x-inputs.group>
                </div>
            </div>

            @if($editing) @endif

            <div class="modal-footer">
                <button type="button" class="btn btn-light float-left" wire:click="$toggle('showingModal')">
                    <i class="icon ion-md-close"></i>
                    @lang('crud.common.cancel')
                </button>

                <button type="button" class="btn btn-primary" wire:click="save">
                    <i class="icon ion-md-save"></i>
                    @lang('crud.common.save')
                </button>
            </div>
        </div>
    </x-modal>

    <div class="table-responsive">
        <table class="table table-borderless table-hover">
            <thead>
                <tr>
                    <th>
                        <input type="checkbox" wire:model="allSelected" wire:click="toggleFullSelection" title="{{ trans('crud.common.select_all') }}" />
                    </th>
                    <th class="text-left">
                        @lang('crud.user_commandes.inputs.ref')
                    </th>
                    <th class="text-left">
                        @lang('crud.user_commandes.inputs.produit_id')
                    </th>
                    <th class="text-right">
                        @lang('crud.user_commandes.inputs.qauntite')
                    </th>
                    <th class="text-right">
                        @lang('crud.user_commandes.inputs.prixTotale')
                    </th>
                    <th class="text-left">
                        @lang('crud.user_commandes.inputs.statu')
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach ($commandes as $commande)
                <tr class="hover:bg-gray-100">
                    <td class="text-left">
                        <input type="checkbox" value="{{ $commande->id }}" wire:model="selected" />
                    </td>
                    <td class="text-left">{{ $commande->ref ?? '-' }}</td>
                    <td class="text-left">
                        {{ optional($commande->produit)->nom ?? '-' }}
                    </td>
                    <td class="text-right">{{ $commande->qauntite ?? '-' }}</td>
                    <td class="text-right">
                        {{ $commande->prixTotale ?? '-' }}
                    </td>
                    <td class="text-left">{{ $commande->statu ?? '-' }}</td>
                    <td class="text-right" style="width: 134px;">
                        <div role="group" aria-label="Row Actions" class="relative inline-flex align-middle">
                            @can('update', $commande)
                            <button type="button" class="btn btn-light" wire:click="editCommande({{ $commande->id }})">
                                <i class="icon ion-md-create"></i>
                            </button>
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">{{ $commandes->render() }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
