<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function create(){
        return Inertia::render('User/Register', []);
    }

    public function store(UserRegisterRequest $request){

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        session()->flash('success', 'Пользователь зарегистрирован');
        Auth::login($user);
        return redirect()->route('home.page');
    }

    public function loginCreate(){
        return Inertia::render('User/Login');
    }

    public function login(UserLoginRequest $request){

        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()
                ->route('user.login')
                ->with('error', 'Email или пароль введены не верно');
        }
        return redirect()->route('home.page');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('home.page');
    }
}
