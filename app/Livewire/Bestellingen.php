<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use App\Models\Bestelling;
use App\Models\Drank_bestelling;
use App\Models\Pizza_bestelling;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;


class Bestellingen extends Component
{
    public $Products;
    public $prijs;

    public function mount()
    {
      $Products = Session::get('order');
      $this->Products = $Products;
      if($this->Products)
      $this->prijs = $this->calc_price($this->Products);
    }

    #[On('post-created')]
    public function Pollcart()
    {
      $this->Products = Session::get('order');
      if($this->Products)
      $this->prijs = $this->calc_price($this->Products);

    }

    public function Order() {
      $Products = Session::get('order');
      if(Session::exists('order')){
        $order = new Bestelling();
        $order->Datum = date('Y-m-d');
        Auth::check() ? $order->GebruikerID = Auth::user()->id : null;
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
          elseif ($Product->Drank) {
            $Order = new Drank_bestelling();
            $Order->DrankID = $Product->Drank->DrankID;
            $Order->BestelID = $order->BestelID;
            $Order->Aantal = $Product->Aantal;
            $Order->Prijs = $Product->Drank->Prijs * $Product->Aantal;
            $Order->save();
          }
        endforeach;
        Session::forget('order');
        if(!$order->GebruikerID):
          Session::forget('bestelling');
          Session::put('bestelling', $order->BestelID);
          return redirect("/bestelling");
        endif;
        return redirect("/bestelling/" . $order->BestelID);

      }
    }

    private function calc_price($Products)
    {
      $prijs = 0;
      foreach($Products as $Product):
        if($Product->Pizza):
        $prijs += ($Product->Pizza->Prijs + $Product->Grootte->Prijs) * $Product->Aantal;
        else:
          $prijs += $Product->Drank->Prijs * $Product->Aantal;
        endif;
      endforeach;
      return $prijs;
    }

    public function render()
    {
        return view('livewire.bestellingen');
    }
}
