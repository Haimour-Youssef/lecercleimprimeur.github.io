<?php

namespace App\Http\Livewire;

use App\Models\Detail;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DetailDetailsDetail extends Component
{
    use WithPagination;
    use WithFileUploads;
    use AuthorizesRequests;

    public Detail $detail;
    // public Detail $detail;
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
    ];

    public function mount(Detail $detail): void
    {
        $this->detail = $detail;
        $this->resetDetailData();
    }

    public function resetDetailData(): void
    {
        $this->detail = new Detail();

        $this->detailThumbnail = null;

        $this->dispatchBrowserEvent('refresh');
    }

    public function newDetail(): void
    {
        $this->editing = false;
        $this->modalTitle = trans('crud.detail_details.new_title');
        $this->resetDetailData();

        $this->showModal();
    }

    public function editDetail(Detail $detail): void
    {
        $this->editing = true;
        $this->modalTitle = trans('crud.detail_details.edit_title');
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

        if (!$this->detail->detail_id) {
            $this->authorize('create', Detail::class);

            $this->detail->detail_id = $this->detail->id;
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

        foreach ($this->detail->details as $detail) {
            array_push($this->selected, $detail->id);
        }
    }

    public function render(): View
    {
        return view('livewire.detail-details-detail', [
            'details' => $this->detail->details()->paginate(20),
        ]);
    }
}
