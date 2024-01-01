@php $editing = isset($user) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="nom"
            label="Nom"
            :value="old('nom', ($editing ? $user->nom : ''))"
            maxlength="255"
            placeholder="Nom"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="prenom"
            label="Prenom"
            :value="old('prenom', ($editing ? $user->prenom : ''))"
            maxlength="255"
            placeholder="Prenom"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.email
            name="email"
            label="Email"
            :value="old('email', ($editing ? $user->email : ''))"
            maxlength="255"
            placeholder="Email"
        ></x-inputs.email>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="telephone"
            label="Telephone"
            :value="old('telephone', ($editing ? $user->telephone : ''))"
            maxlength="255"
            placeholder="Telephone"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="region"
            label="Region"
            :value="old('region', ($editing ? $user->region : ''))"
            maxlength="255"
            placeholder="Region"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="adresse"
            label="Adresse"
            :value="old('adresse', ($editing ? $user->adresse : ''))"
            maxlength="255"
            placeholder="Adresse"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="ville"
            label="Ville"
            :value="old('ville', ($editing ? $user->ville : ''))"
            maxlength="255"
            placeholder="Ville"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="pays"
            label="Pays"
            :value="old('pays', ($editing ? $user->pays : ''))"
            maxlength="255"
            placeholder="Pays"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.password
            name="password"
            label="Password"
            maxlength="255"
            placeholder="Password"
            :required="!$editing"
        ></x-inputs.password>
    </x-inputs.group>
</div>
