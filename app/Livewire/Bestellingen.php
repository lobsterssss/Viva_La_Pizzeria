<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\Bestelling;
use App\Models\Drank_bestelling;
use App\Models\Pizza_bestelling;
use Livewire\Attributes\On;


class Bestellingen extends Component
{
    public $Products;

    public function mount()
    {
      // Session::flush('order');
      $Products = Session::get('order');
      $this->Products = $Products;
    }

    #[On('post-created')]
    public function Remove()
    {
      $Products = Session::get('order');
      $this->Products = $Products;

    }
    
    public function Pollcart()
    {
      unset($this->Products);
      $this->Products = Session::get('order');
      $this->render();
    }

    public function Order() {
      $order = new Bestelling();
      $order->Datum = date('Y-m-d');
      $order->save();
      $Products = Session::get('order');
      foreach($Products as $Product):
        if($Product->Pizza)
        {
          $Order = new Pizza_bestelling();
          $Order->PizzaID = $Product->Pizza->PizzaID;
          $Order->BestelID = $order->BestelID;
          $Order->GrootteID = $Product->Grootte->GrootteID;
          $Order->Aantal = $Product->Aantal;
          $Order->Prijs = ($Product->Pizza->Prijs + $Product->Grootte->Prijs) * $Product->Aantal;
          $Order->save();
        }
        elseif ($Product->Drink) {
          $Order = new Drank_bestelling();
          $Order->PizzaID = $Product->Drank->DrankID;
          $Order->BestelID = $order->BestelID;
          $Order->Aantal = $Product->Aantal;
          $Order->Prijs = $Product->Drank->Prijs * $Product->Aantal;
          $Order->save();
        }
      endforeach;
      Session::flush('order');
      return redirect();
    }

    public function render()
    {
        return view('livewire.bestellingen');
    }
}
