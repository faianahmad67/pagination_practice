<?php

namespace App\Livewire;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class Opportunities extends Component
{
    use withPagination;

    public $perPage = 20; // Default number of items per page
    public $options = [20, 50, 100, 250]; // Options for items per page
    protected $queryString = ['perPage']; // Keep perPage in the URL

    public function updatingPerPage()
    {
        $this->resetPage(); // Reset to the first page when perPage changes
    }

    public function render()
    {
        $items = Item::paginate($this->perPage);
        return view('livewire.opportunities', [
            'items' => $items
        ]);
    }
}
