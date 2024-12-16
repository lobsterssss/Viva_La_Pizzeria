<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_bestelling extends Model
{
    protected $fillable = [
        'Aantal',
        'prijs',
    ];
    protected $hidden = [
        'BestelID',
    ];
    
}
