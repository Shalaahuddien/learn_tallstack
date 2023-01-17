<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Movies extends Component
{
    public $searchKey;

    public function searchTrigger()
    {
        $this->emit('search-trigger', $this->searchKey);
    }

    public function render()
    {
        return view('livewire.movies');
    }
}
