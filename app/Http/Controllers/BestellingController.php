<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Bestelling;


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
            return view("Bestellingen.bestelling")->with('order', $order);
        }
        else
        {
            return redirect("/");
        }
    }

    public function order_history() 
    {
        $orders = Bestelling::all_orders();
        return view("Bestellingen.index")->with('orders', $orders);
    }


}
