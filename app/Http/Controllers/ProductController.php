<?php

namespace App\Http\Controllers;
use App\Models\Pizza;
use App\Models\Drank;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index() 
    {
        $products['pizzas'] = Pizza::all();
        $products['drinks'] = Drank::all();
        return view("index", $products);
    }

    public function show() 
    {

    }

    public function register() 
    {

    }

    public function logout() 
    {

    }
}
