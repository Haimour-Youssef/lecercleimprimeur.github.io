@php $editing = isset($caracteristique) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="nom"
            label="Nom"
            :value="old('nom', ($editing ? $caracteristique->nom : ''))"
            maxlength="255"
            placeholder="Nom"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="produit_id" label="Produit">
            @php $selected = old('produit_id', ($editing ? $caracteristique->produit_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Produit</option>
            @foreach($produits as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>
</div>
