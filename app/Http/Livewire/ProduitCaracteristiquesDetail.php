<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produit;
use Illuminate\View\View;
use Livewire\WithPagination;
use App\Models\Caracteristique;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProduitCaracteristiquesDetail extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public Produit $produit;
    public Caracteristique $caracteristique;

    public $selected = [];
    public $editing = false;
    public $allSelected = false;
    public $showingModal = false;

    public $modalTitle = 'New Caracteristique';

    protected $rules = [
        'caracteristique.nom' => ['nullable', 'max:255', 'string'],
    ];

    public function mount(Produit $produit): void
    {
        $this->produit = $produit;
        $this->resetCaracteristiqueData();
    }

    public function resetCaracteristiqueData(): void
    {
        $this->caracteristique = new Caracteristique();

        $this->dispatchBrowserEvent('refresh');
    }

    public function newCaracteristique(): void
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.produit_caracteristiques.new_title');
        $this->resetCaracteristiqueData();

        $this->showModal();
    }

    public function editCaracteristique(Caracteristique $caracteristique): void
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.produit_caracteristiques.edit_title');
        $this->caracteristique = $caracteristique;

        $this->dispatchBrowserEvent('refresh');

        $this->showModal();
    }

    public function showModal(): void
    {
        $this->resetErrorBag();
        $this->showingModal = true;
    }

    public function hideModal(): void
    {
        $this->showingModal = false;
    }

    public function save(): void
    {
        $this->validate();

        if (!$this->caracteristique->produit_id) {
            $this->authorize('create', Caracteristique::class);

            $this->caracteristique->produit_id = $this->produit->id;
        } else {
            $this->authorize('update', $this->caracteristique);
        }

        $this->caracteristique->save();

        $this->hideModal();
    }

    public function destroySelected(): void
    {
        $this->authorize('delete-any', Caracteristique::class);

        Caracteristique::whereIn('id', $this->selected)->delete();

        $this->selected = [];
        $this->allSelected = false;

        $this->resetCaracteristiqueData();
    }

    public function toggleFullSelection(): void
    {
        if (!$this->allSelected) {
            $this->selected = [];
            return;
        }

        foreach ($this->produit->caracteristiques as $caracteristique) {
            array_push($this->selected, $caracteristique->id);
        }
    }

    public function render(): View
    {
        return view('livewire.produit-caracteristiques-detail', [
            'caracteristiques' => $this->produit
                ->caracteristiques()
                ->paginate(20),
        ]);
    }
}
