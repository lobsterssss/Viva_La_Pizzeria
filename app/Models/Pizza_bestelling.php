<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza_bestelling extends Product_bestelling
{
    protected $fillable = [
        'GroottelID',
    ];

    protected $hidden = [
        'PizzalID',
    ];

    public function Pizza(){
        return $this->hasOne(Pizza::class, null ,'PizzalID');
    }

    public function Get_size($id) 
    {
        return Grootte::find($id);
    }

    public function Grootte(){
        return $this->belongsTo(Grootte::class, 'GrootteID', 'ID');
    }

    public function Bestelling(){
        return $this->belongsTo(Bestelling::class);
    }
}
