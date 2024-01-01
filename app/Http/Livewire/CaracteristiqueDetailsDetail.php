<?php

namespace App\Http\Livewire;

use App\Models\Detail;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Caracteristique;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CaracteristiqueDetailsDetail extends Component
{
    use WithPagination;
    use WithFileUploads;
    use AuthorizesRequests;

    public Caracteristique $caracteristique;
    public Detail $detail;
    public $detailThumbnail;
    public $uploadIteration = 0;

    public $selected = [];
    public $editing = false;
    public $allSelected = false;
    public $showingModal = false;

    public $modalTitle = 'New Detail';

    protected $rules = [
        'detailThumbnail' => ['nullable', 'file'],
        'detail.nom' => ['nullable', 'max:255', 'string'],
        'detail.prix' => ['nullable', 'numeric'],
        'detail.detail_id' => ['nullable', 'exists:details,id'],
    ];

    public function mount(Caracteristique $caracteristique): void
    {
        $this->caracteristique = $caracteristique;
        $this->resetDetailData();
    }

    public function resetDetailData(): void
    {
        $this->detail = new Detail();

        $this->detailThumbnail = null;
        $this->detail->detail_id = null;

        $this->dispatchBrowserEvent('refresh');
    }

    public function newDetail(): void
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.caracteristique_details.new_title');
        $this->resetDetailData();

        $this->showModal();
    }

    public function editDetail(Detail $detail): void
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.caracteristique_details.edit_title');
        $this->detail = $detail;

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

        if (!$this->detail->caracteristique_id) {
            $this->authorize('create', Detail::class);

            $this->detail->caracteristique_id = $this->caracteristique->id;
        } else {
            $this->authorize('update', $this->detail);
        }

        if ($this->detailThumbnail) {
            $this->detail->thumbnail = $this->detailThumbnail->store('public');
        }

        $this->detail->save();

        $this->uploadIteration++;

        $this->hideModal();
    }

    public function destroySelected(): void
    {
        $this->authorize('delete-any', Detail::class);

        collect($this->selected)->each(function (string $id) {
            $detail = Detail::findOrFail($id);

            if ($detail->thumbnail) {
                Storage::delete($detail->thumbnail);
            }

            $detail->delete();
        });

        $this->selected = [];
        $this->allSelected = false;

        $this->resetDetailData();
    }

    public function toggleFullSelection(): void
    {
        if (!$this->allSelected) {
            $this->selected = [];
            return;
        }

        foreach ($this->caracteristique->details as $detail) {
            array_push($this->selected, $detail->id);
        }
    }

    public function render(): View
    {
        return view('livewire.caracteristique-details-detail', [
            'details' => $this->caracteristique->details()->paginate(20),
        ]);
    }
}
