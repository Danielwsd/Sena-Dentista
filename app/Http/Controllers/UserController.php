<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function create(){

        return view('auth.registro');
    }


    public function store(Request $request){

        // $user = User::create(request(['nombre','apellido','email','password']));
        
        // auth()->registro($user);
        // return redirect()->to('/');

            $user=new User();
            $user->nombre=$request->nombre;
            $user->apellido=$request->apellido;
            $user->email=$request->email;
            $user->password=$request->password;
            $user->save();

            return redirect()->to('/');
        
        }
}

