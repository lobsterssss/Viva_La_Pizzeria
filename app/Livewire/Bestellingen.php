<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Bestellingen extends Component
{
    public $Products;

    public function mount()
    {
      $this->Products = Session::get('order');
    }

    public function render()
    {
        return view('livewire.bestellingen');
    }
}
