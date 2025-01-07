<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
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
        if(!$this->amount >= 1)
        {
            $this->bestelling = null;
            // return "";
            $products = Session::get('order');
            unset($products[$this->bestelling]);
            Session::set('order', $products[$this->bestelling]);

        }
        else
        {
            $products = Session::get('order');
            $products[$this->bestelling]->amount = $this->amount--;
            Session::set('order', $products[$this->bestelling]);

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
