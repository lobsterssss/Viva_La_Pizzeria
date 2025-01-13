<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grootte extends Model
{
   protected $table = 'Groottes';

    protected $primaryKey = 'GrootteID';

    protected $fillable = [
        'PizzalGrootte',
        'Prijs',
    ];

    public function Pizza_Bestellingen()
    {
       return $this->hasMany(Pizza_bestelling::class);
    }
 
    static public function get_Sizes()
    {
       return Grootte::all();
    }
    static public function get_Size($id)
    {
       return Grootte::find($id);
    }
}
