<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchComponent extends Component
{

     public $searchKey;
     public $searchAction;

    //  public function mount($searchStatus)
    //  {
    //     dd($searchStatus);
    //  }

    public function searchTrigger()
    {
        // Search Action

        if ($this->searchAction) $this->emit('search-trigger', $this->searchKey);

        //redirect Action

        else redirect('/search/movies/' . $this->searchKey);

        // if($this->searchAction) $this->emit('search')

        // $this->emit('search-trigger', $this->searchKey);

        // dd($this->searchKey);
        // dd($this->searchAction);

    }

    public function mount(
        $searchKey = '',
        $searchAction = true)
    {
        $this->searchKey = $searchKey;

        $this->searchAction = $searchAction;

        // dd($searchKey);
        // $this->searchAction = $searchAction;
    }

    public function render()
    {
        return view('livewire.search-component');
    }
}
