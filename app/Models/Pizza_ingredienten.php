<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza_ingredienten extends Model
{
    protected $table = 'Pizza_ingredientens';

    protected $fillable = [
        'PizzalID',
        'IngrediëntID',
    ];
}
