<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drank_bestelling extends Product_bestelling
{
    protected $table = 'Bestelling_dranks';

    public function Drank(){
        return $this->hasOne(Drank::class, 'DrankID' ,'DrankID');
    }

    public function Bestelling(){
        return $this->belongsTo(Bestelling::class);
    }
}
