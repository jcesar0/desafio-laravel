<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', '=', $request->email)->first();

        if(!$user)
            return redirect()->route('login')->withErrors('Dados incorretos');

        if (!Hash::check($request->password, $user->password))
            return redirect()->route('login')->withErrors('Dados incorretos');

        Auth::login($user, true);
        return redirect()->route('home')->with('pop_up', 'Bem-vindo, tenha uma boa experiência');
    }
}
