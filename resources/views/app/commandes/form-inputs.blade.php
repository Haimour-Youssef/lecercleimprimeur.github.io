@php $editing = isset($commande) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="ref"
            label="Ref"
            :value="old('ref', ($editing ? $commande->ref : ''))"
            maxlength="255"
            placeholder="Ref"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="produit_id" label="Produit" required>
            @php $selected = old('produit_id', ($editing ? $commande->produit_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Produit</option>
            @foreach($produits as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $commande->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.number
            name="qauntite"
            label="Qauntite"
            :value="old('qauntite', ($editing ? $commande->qauntite : ''))"
            step="0.01"
            placeholder="Qauntite"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.number
            name="prixTotale"
            label="Prix Totale"
            :value="old('prixTotale', ($editing ? $commande->prixTotale : ''))"
            step="0.01"
            placeholder="Prix Totale"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="statu" label="Statu">
            @php $selected = old('statu', ($editing ? $commande->statu : '')) @endphp
            <option value="En cours" {{ $selected == 'En cours' ? 'selected' : '' }} >En cours</option>
            <option value="Livré" {{ $selected == 'Livré' ? 'selected' : '' }} >Livré</option>
            <option value="En attente" {{ $selected == 'En attente' ? 'selected' : '' }} >En attente</option>
            <option value="Expédiée" {{ $selected == 'Expédiée' ? 'selected' : '' }} >Expédiée</option>
            <option value="Annulé" {{ $selected == 'Annulé' ? 'selected' : '' }} >Annulé</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
