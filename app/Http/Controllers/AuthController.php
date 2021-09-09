<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        $validate = $request->validate(([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]));

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->with('error', 'akun anda salah!');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validate = request()->validate([
            'nisn' => 'required|int',
            'name' => 'required|max:255',
            'kelas' => 'required|max:4',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:10',
        ]);
        $validate['password'] = bcrypt($validate['password']);
        User::create($validate);
        return redirect('/masuk')->with('success', 'silakan login dengan akun yang telah anda buat');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}