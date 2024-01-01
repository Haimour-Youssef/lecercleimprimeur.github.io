<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Produit;
use App\Models\Commande;
use Illuminate\View\View;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserCommandesDetail extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public User $user;
    public Commande $commande;
    public $produitsForSelect = [];

    public $selected = [];
    public $editing = false;
    public $allSelected = false;
    public $showingModal = false;

    public $modalTitle = 'New Commande';

    protected $rules = [
        'commande.ref' => ['required', 'max:255', 'string'],
        'commande.produit_id' => ['required', 'exists:produits,id'],
        'commande.qauntite' => ['required', 'numeric'],
        'commande.prixTotale' => ['required', 'numeric'],
        'commande.statu' => ['required', 'max:255', 'string'],
    ];

    public function mount(User $user): void
    {
        $this->user = $user;
        $this->produitsForSelect = Produit::pluck('nom', 'id');
        $this->resetCommandeData();
    }

    public function resetCommandeData(): void
    {
        $this->commande = new Commande();

        $this->commande->produit_id = null;

        $this->dispatchBrowserEvent('refresh');
    }

    public function newCommande(): void
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.user_commandes.new_title');
        $this->resetCommandeData();

        $this->showModal();
    }

    public function editCommande(Commande $commande): void
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.user_commandes.edit_title');
        $this->commande = $commande;

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

        if (!$this->commande->user_id) {
            $this->authorize('create', Commande::class);

            $this->commande->user_id = $this->user->id;
        } else {
            $this->authorize('update', $this->commande);
        }

        $this->commande->save();

        $this->hideModal();
    }

    public function destroySelected(): void
    {
        $this->authorize('delete-any', Commande::class);

        Commande::whereIn('id', $this->selected)->delete();

        $this->selected = [];
        $this->allSelected = false;

        $this->resetCommandeData();
    }

    public function toggleFullSelection(): void
    {
        if (!$this->allSelected) {
            $this->selected = [];
            return;
        }

        foreach ($this->user->commandes as $commande) {
            array_push($this->selected, $commande->id);
        }
    }

    public function render(): View
    {
        return view('livewire.user-commandes-detail', [
            'commandes' => $this->user->commandes()->paginate(20),
        ]);
    }
}
