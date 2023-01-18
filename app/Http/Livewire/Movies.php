<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Movies extends Component
{

    public $searchKey;

    public function mount($urlkey)
    {

        $this->searchKey = $urlkey;

        // dd($urlkey);

        // dd($this->searchKey);

    }

    public function render()
    {
        return view('livewire.movies');
    }
}
