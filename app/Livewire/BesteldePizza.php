<?php

namespace App\Livewire;

use App\Models\Pizza_bestelling;
use Livewire\Component;

class BesteldePizza extends Component
{
    public $product;
    public $ProductID;
    
    public $amount = 1;

    public function mount(Pizza_bestelling $product) {
        $this->product = $product;
        $this->amount = $product->Aantal;
    }
    public function removeIncrement() {
        $this->product->amount = $this->product->amount--;
    }
    public function addIncrement() {
        $this->product->Aantal++;
    }

    public function render()
    {

        return view('livewire.bestelde-pizza');
    }
}
