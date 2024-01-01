@php $editing = isset($produit) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $produit->thumbnail ? \Storage::url($produit->thumbnail) : '' }}')"
        >
            <x-inputs.partials.label
                name="thumbnail"
                label="Thumbnail"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="thumbnail"
                    id="thumbnail"
                    @change="fileChosen"
                />
            </div>

            @error('thumbnail') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="nom"
            label="Nom"
            :value="old('nom', ($editing ? $produit->nom : ''))"
            maxlength="255"
            placeholder="Nom"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="categorie_id" label="Categorie" required>
            @php $selected = old('categorie_id', ($editing ? $produit->categorie_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Categorie</option>
            @foreach($categories as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="description"
            label="Description"
            maxlength="255"
            >{{ old('description', ($editing ? $produit->description : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
