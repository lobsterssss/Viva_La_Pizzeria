<?php

namespace App\Livewire;

use App\Models\Bestelling;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BestellingGeschiedenis extends Component
{
    public $orders;
    public function mount()
    {
        $this->orders = Bestelling::all_user_orders();
    }

    public function getOrders()
    {        
        $this->orders = Bestelling::all_user_orders();
    }

    public function render()
    {
        return view('livewire.bestelling-geschiedenis');
    }
}
