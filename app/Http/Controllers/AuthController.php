<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function registerPage(){

return view('auth.register');

  }
  public function registration(Request $request){


    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'user_Type' => 'user',
    ]);

return view('auth.register');

  }
}
