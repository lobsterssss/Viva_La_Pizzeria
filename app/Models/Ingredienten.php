<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredienten extends Model
{
    protected $table = 'Ingredientens';

    protected $fillable = [
        'Naam',
        'Voorraad',
    ];
}
