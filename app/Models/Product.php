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
}
