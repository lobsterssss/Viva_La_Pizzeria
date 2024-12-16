<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Product
{
   static public function get_pizza($id)
   {
      return Pizza::find($id);
   }

   static public function Pizza_ingredienten($id)
   {
      return Pizza_ingredienten::all()->where($id);
   }

   static public function Groottes()
   {
      return Grootte::all();
   }
   
}
