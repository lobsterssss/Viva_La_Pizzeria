<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drank extends Product
{
    protected $table = 'Dranks';
    protected $primaryKey = 'DrankID';

    static public function get_drank($id)
    {
       return Drank::find($id);
    }
}
