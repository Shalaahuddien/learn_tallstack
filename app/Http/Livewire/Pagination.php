<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Pagination extends Component
{

    public $currentpage = 1;
    public $totalPage = 1;

    public function prevPage()
    {
       if ($this->currentpage > 1) {
        $this->currentpage -= 1;
        $this->emit('onPageChange', $this->currentpage);
        }
    }

    public function nextPage()
    {
        if ($this->currentpage < $this->totalpage) {
            $this->currentpage += 1;
            $this->emit('onPageChange', $this->currentpage);
        }
    }

    public function mount(
        $currentpage = 1,
        $totalpage = 1,
    )
    {

        $this->currentpage = $currentpage;
        $this->totalpage = $totalpage;

    }

    public function render()
    {
        return view('livewire.pagination');
    }
}
