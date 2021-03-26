<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.auth');
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', '=', $request->email)->first();

        if(!$user)
            return redirect()->route('auth')->withErrors('Dados incorretos');

        if (!Hash::check($request->password, $user->password))
            return redirect()->route('auth')->withErrors('Dados incorretos');

        Auth::login($user, true);
        return redirect()->route('home')->with('pop_up', 'Bem-vindo, tenha uma boa experiência');
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('auth')->with('pop_up', 'Conta criada com sucesso!');
    }

}
