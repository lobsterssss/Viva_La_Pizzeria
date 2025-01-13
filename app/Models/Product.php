<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'naam',
        'omschrijving',
        'prijs',
        'foto_uri'
    ];

    static public function all_products()
    {
        foreach(Pizza::all() as $Pizza) {
            $products['pizzas'][] = $Pizza;
        } 
        foreach(Drank::all() as $drank) {
            $products['drinks'][] = $drank;
        } 
        return $products;
    }
}
