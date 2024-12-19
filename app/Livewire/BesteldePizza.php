<?php

namespace App\Livewire;

use App\Models\Pizza_bestelling;
use Livewire\Component;

class BesteldePizza extends Component
{
    public $product;
    
    public $amount = 1;

    public function mount(Pizza_bestelling $product) {
        $this->product = $product;

        $this->amount = $product->Aantal;
    }
    public function removeIncrement() {
        $this->product->amount = $this->product->amount--;
        return $this->product;
    }
    public function addIncrement() {
        $this->product->Aantal++;
        return $this->product;

    }

    public function render()
    {

        return view('livewire.bestelde-pizza');
    }
}
