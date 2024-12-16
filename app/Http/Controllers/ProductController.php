<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class ProductController extends Controller
{


    public function index() 
    {
        $products = Product::all_products();
        
        return view("Product.Menu")->with('products', $products);
    }

    public function show() 
    {

    }

    public function all_products()
    {
        $products = Product::all_products();

        return response()->json($products);
    }
}
