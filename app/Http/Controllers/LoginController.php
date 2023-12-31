<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){

        $user = new User();
        
        $user->name = $request->name;
        $user->apellido = $request->lastname;
        $user->email = $request->email;
        $user->telefono = $request->phone;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('dashboard'));
    }

    public function login(Request $request){

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            //"active" => true,
        ];

        //$remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            return redirect(route('panel'));

        }else{
            return redirect('login');
        }

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
