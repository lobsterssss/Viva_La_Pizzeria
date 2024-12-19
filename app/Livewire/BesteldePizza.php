<?php

namespace App\Livewire;

use App\Models\Grootte;
use App\Models\Pizza;
use App\Models\Pizza_bestelling;
use Livewire\Component;

class BesteldePizza extends Component
{
    public $bestelling;
    public $product;
    public $product_groote;
    public $amount = 1;

    public function mount(Pizza_bestelling $bestelling) {
        $this->bestelling = $bestelling;
        $this->product = $bestelling->Pizza;
        $this->product_groote = $bestelling->Grootte;
        $this->amount = $bestelling->Aantal;
    }
    public function removeIncrement() {
        $this->amount--;
        if($this->amount >= 0)
        {
            
            $this->bestelling;
        }
    }

    public function addIncrement() {
        $this->amount++;
    }

    public function render()
    {
        // dd($this);
        return view('livewire.bestelde-pizza' );
    }
}
