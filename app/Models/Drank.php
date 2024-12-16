<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drank extends Product
{
    static public function get_drank($id)
    {
       return Drank::find($id);
    }
}
