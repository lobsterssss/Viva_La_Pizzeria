<?php

namespace App\Http\Controllers;

use App\Enums\Roles;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Bestelling;
use Illuminate\Support\Facades\Auth;

class BestellingController extends Controller
{
    
    public function index() 
    {
        $products = Product::all_products();
        return view("Bestellingen.index")->with('products', $products);
    }

    public function show_order() 
    {
        if(Session::exists('bestelling'))
        {
            $order = Session::get('bestelling');
            $order = Bestelling::get_order_by_id($order->BestelID);
            return view("Bestellingen.bestelling")->with('order', $order);
        }
        else
        {
            return redirect("/");
        }
    }

    public function show_user_order($id) 
    {
        if(Auth::check())
        {
            if(Auth::user()->Role == Roles::Kassa->value || Auth::user()->Role == Roles::Keuken->value){
                $order = Bestelling::get_order_by_id($id);
            }
            else{
                $order = Bestelling::get_user_order_by_id($id);
            }
            return view("Bestellingen.bestelling")->with('order', $order);
        }
        else
        {
            return redirect("/");
        }
    }

    public function order_history() 
    {
        return view("Bestellingen.bestelling_history");
    }


}
