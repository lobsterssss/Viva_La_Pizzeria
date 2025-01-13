<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza_bestelling extends Product_bestelling
{

    protected $table = 'Bestelling_pizzas';
    protected $fillable = [
        'GroottelID',
    ];

    protected $hidden = [
        'PizzalID',
    ];

    public function Pizza(){
        return $this->hasOne(Pizza::class, 'PizzaID' ,'PizzaID');
    }

    public function Get_size($id) 
    {
        return Grootte::find($id);
    }

    public function Grootte(){
        return $this->belongsTo(Grootte::class, 'GrootteID');
    }

    public function Bestelling(){
        return $this->belongsTo(Bestelling::class);
    }
}
