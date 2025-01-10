<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Bestelling;
use App\Models\Pizza;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;

class ApiController extends Controller
{
    public static function all_products()
    {
        $products = Product::all_products();

        return json_encode($products);
    }

    public static function get_next_order()
    {
        $products["order"] = Bestelling::get_order_not_started();
        $products["order_contents"] = $products["order"]->pizza_bestelling;
        return json_encode($products);
    }

    public static function all_user_orders()
    {
        $products = Bestelling::all_user_orders();

        return response()->json($products);
    }

    public static function register(Request $request) 
    {
        $data = $request->all();
        $EmailIsTaken = User::where("Email", $data['Email'])->first();
        if(!isset($EmailIsTaken) && $data['HASH'] == $data['re-password']):
            $User = new User();
            $message = $User->create_user($data);
        else:
            $message = ["error" => "email already in use"];
        endif;
        return response()->json($message, 200);
    }

    public static function login(Request $request) 
    {
        $data = $request->all();
        $User = User::where("Email", $data['Email'])->first();
        if(isset($User) && Hash::check($data['HASH'], $User['HASH'])):
            Auth::login($User);
            return response()->json(200);
        endif;
        return response()->json("Wrong email or password");
    }
}
