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
    public $amount;
    public $index;


    public function mount($bestelling, $index) {
        $this->bestelling = $bestelling;
        if($bestelling->Pizza):
        $this->product = $bestelling->Pizza;
        $this->product_groote = $bestelling->Grootte;
        else:
            $this->product = $bestelling->Drank;
        endif;
        $this->amount = $bestelling->Aantal;
        $this->index = $index;
    }

    public function removeIncrement() {
        if($this->amount <= 1)
        {
            $products = Session::get('order');
            unset($products[$this->index]);
            Session::put('order', $products);
            $this->dispatch('post-created');

        }
        else
        {
            $this->amount--;
            $products = Session::get('order');
            $products[$this->index]->Aantal--;
            Session::put('order', $products);
            $this->dispatch('post-created');

        }
    }

    public function addIncrement() {
        $this->amount++;
        $products = Session::get('order');
        $products[$this->index]->Aantal++;
        Session::put('order', $products);
        $this->dispatch('post-created');

    }

    public function render()
    {
        return view('livewire.bestelde-pizza' );
    }
}
