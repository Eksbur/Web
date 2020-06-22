<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function auth(Request $request)
	{

		$user = User::where([['login', $request->login],['password', $request->password]])->first();
		if (is_nll($user)){
			return "неверный логи или пароль"
	}
	Auth::login($user);
	returne back()->withInput();
	
}
