<?php

namespace App\Models;

use App\Enums\Roles;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Bestelling extends Model
{
    public $timestamps = false;
    protected $table = 'Bestellings';
    protected $primaryKey = 'BestelID';

    protected $attributes = [
        'Status' => Status::Nog_niet_beggonen,
    ];

    static public function all_user_orders(){
        if(Auth::check()):
            if(Auth::user()->Role == Roles::Kassa->value || Auth::user()->Role == Roles::Keuken->value):
                return Bestelling::orderBy("Status", "ASC")->get();
            else:
                return Bestelling::where("GebruikerID", Auth::user()->id)->get();
            endif;
        endif;
    }

    static public function get_order_by_id($id)
    {
        return Bestelling::find($id);
    }
    
    static public function get_user_order_by_id($id)
    {
        return Bestelling::where("GebruikerID", Auth::user()->id)->find($id);
    }

    static public function get_order_not_started()
    {
        $order = Bestelling::where('status', Status::Nog_niet_beggonen)->first();
        $order->Status = Status::Beggonen;
        $order->save();
        return $order;
    }

    static public function set_status_done($id)
    {
        $order = Bestelling::find($id)->first()->Status;
        $order->Status = Status::Klaar;
        if($order->save()):
            return 200;
        else:
            return 500;
        endif;
    }

    public function pizza_bestelling(){
        return $this->hasMany(Pizza_bestelling::class, "BestelID");
    }

    public function drank_bestelling(){
        return $this->hasMany(Drank_bestelling::class, "BestelID");
    }

}
