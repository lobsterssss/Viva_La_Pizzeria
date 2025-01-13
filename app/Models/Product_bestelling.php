<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_bestelling extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'Aantal',
        'prijs',
    ];
    protected $hidden = [
        'BestelID',
    ];

    protected $attributes = [
        'Aantal' => 1,
    ];
}
