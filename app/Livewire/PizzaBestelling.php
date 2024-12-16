<?php

namespace App\Livewire;

use App\Models\Bestelling;
use App\Models\Pizza;
use App\Models\Pizza_bestelling;
use Livewire\Component;

class PizzaBestelling extends Component
{
    public $pizza;
    public $Pizza_Groote;

    public function mount(Pizza $pizza)
    {
        $this->pizza = $pizza;
        $this->Pizza_Groote = 1;

    }

    public function addToOrder() {
        return var_dump($this->Pizza_Groote);
    }

    public function render()
    {
        return view('livewire.pizza-bestelling');
    }
}
