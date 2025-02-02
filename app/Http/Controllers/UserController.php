<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;

class UserController extends Controller
{
    
    public function post_Login(Request $request) 
    {
        
        $responce = ApiController::login($request);
        $message = json_decode($responce->content());
        if($message == 200):
            return redirect("/");
        endif;

        return back()->withInput()->withErrors(['error' => 'Fout email of wachtwoord'], 'custom_error_bag');
    }

    public function Edit() 
    {

    }

    public function Show() 
    {

    }

    public function post_Register(Request $request) 
    {
        $responce = ApiController::register($request);
        $message = json_decode($responce->content());
         if($message == "account succesfull aangemaakt"):
            return redirect("/login");
        else:
            return back()->withInput()->withErrors($message);
        endif;
    }



    public function logout() 
    {
        Session()->flush();
        return redirect("/");
    }

}
