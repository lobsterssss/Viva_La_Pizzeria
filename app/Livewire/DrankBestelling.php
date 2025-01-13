<?php

namespace App\Livewire;

use App\Models\Drank;
use App\Models\Drank_bestelling;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DrankBestelling extends Component
{

    public $Drank;

    public function mount(Drank $drank)
    {
        $this->Drank = $drank;
    }

    public function addToOrder() {
        $Drank_bestelling = new Drank_bestelling();
        $Drank_bestelling->Drank = $this->Drank;
        $order = Session::get("order");
        $order[] = $Drank_bestelling;
        Session::put("order", $order);
        $this->dispatch('post-created');
    }

    public function render()
    {
        return view('livewire.drank-bestelling');
    }
}
