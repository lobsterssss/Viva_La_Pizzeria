<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BestellingController extends Controller
{
    
    public function index() 
    {
        $products = Product::all_products();
        return view("Bestellingen.index")->with('products', $products);
    }
}
