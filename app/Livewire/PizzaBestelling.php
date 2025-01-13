<?php

namespace App\Livewire;

use App\Models\Bestelling;
use App\Models\Pizza;
use App\Models\Pizza_bestelling;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class PizzaBestelling extends Component
{
    public $pizza;
    public $Pizza_Grooten;
    public $Pizza_Groote = 1;

    public function mount(Pizza $pizza)
    {
        $this->pizza = $pizza;
        $this->Pizza_Grooten = $pizza->Groottes();
    }

    public function addToOrder() {
        $Pizza_bestelling = new Pizza_bestelling();
        $Pizza_bestelling->Pizza = $this->pizza;
        $Pizza_bestelling->Grootte = $this->Pizza_Grooten[$this->Pizza_Groote - 1];
        $order = Session::get("order");
        $order[] = $Pizza_bestelling;
        Session::put("order", $order);
        $this->dispatch('post-created');
    }

    public function render()
    {
        return view('livewire.pizza-bestelling');
    }
}
