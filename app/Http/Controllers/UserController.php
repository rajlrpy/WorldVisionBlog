<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(LoginUserRequest $request){
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();
            Auth::user();
            if(auth()->user()->is_admin)
                return redirect(route('admin.dashboard'));
            return redirect(url('/'));
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function register(RegisterUserRequest $request){
        $request->validated();
        Auth::login(User::create([
            'name'=>$request->name ,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]));
        return redirect(url('/'));
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
