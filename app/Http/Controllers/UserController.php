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
    
    public function Login(Request $request) 
    {
        $data = $request->all();
        $User = User::where("email", $data['email'])->first();
        if(isset($User) && Hash::check($data['password'], $User['password'])):
            Auth::login($User);
            return redirect("/");
        endif;
        return redirect("/login");

    }

    public function Edit() 
    {

    }

    public function Show() 
    {

    }

    public function register(Request $request) 
    {
        $data = $request->all();
        $EmailIsTaken = User::where("email", $data['email'])->first();
        if(!isset($EmailIsTaken) && $data['password'] == $data['re-password']):
            $User = new User();
            $message = $User->create_user($data);
            if($message == "account succesfull aangemaakt"):
                return redirect("/login");
            else:
                return back()->withInput()->withErrors($message);
            endif;
        endif;

    }

    public function logout() 
    {
        Session()->flush();
        return redirect("/");
    }

}
