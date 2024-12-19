<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Product
{
   protected $primaryKey = 'PizzaID';

   static public function get_pizza($id)
   {
      return Pizza::find($id);
   }

   public function Pizza_Bestellingen()
   {
      return $this->hasMany(Pizza_bestelling::class);
   }

   public function Pizza_ingredienten()
   {
      return $this->hasMany(Pizza_ingredienten::class);
   }

   static public function Groottes()
   {
      return Grootte::all();
   }
   
}
