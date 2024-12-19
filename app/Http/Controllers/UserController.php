<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use PharIo\Manifest\Email;

use function Pest\Laravel\json;
use function PHPSTORM_META\type;
use function Termwind\render;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function post_Login(Request $request) 
    {
        $responce = $this->login($request);
        $message = json_decode($responce->content());
        if($message == 200):
            return redirect("/");
        endif;
        return redirect("/login");
    }

    public function login(Request $request) 
    {
        $data = $request->all();
        $User = User::where("Email", $data['Email'])->first();
        if(isset($User) && Hash::check($data['HASH'], $User['HASH'])):
            Auth::login($User);
            return response()->json(200);
        endif;
        return response()->json(404);
    }

    public function Edit() 
    {

    }

    public function Show() 
    {

    }

    public function post_Register(Request $request) 
    {
        $responce = $this->register($request);
        $message = json_decode($responce->content());
         if($message == "account succesfull aangemaakt"):
            return redirect("/login");
        else:
            return back()->withInput()->withErrors($message);
        endif;
    }

    public function register(Request $request) 
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

    public function logout() 
    {
        Session()->flush();
        return redirect("/");
    }

}
