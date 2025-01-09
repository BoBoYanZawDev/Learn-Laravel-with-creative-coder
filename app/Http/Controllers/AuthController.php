<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function create()
    {
        return view('register.register');
    }

    public function loginForm()
    {
        return view('register.login');
    }

    public function loginStore()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        if(auth()->attempt(request(['email', 'password']))){
            return redirect('/');
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }
    }

    public function store(UserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();
        auth()->login($user);
        return redirect('/');
    }

    public function destory()
    {
        auth()->logout();
        return redirect('/login');
    }
}
