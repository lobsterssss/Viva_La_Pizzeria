<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza_bestelling extends Product_bestelling
{
    protected $fillable = [
        'PizzalID',
        'GroottelID',
    ];

}
