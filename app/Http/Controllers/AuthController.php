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
       return redirect('/');
   }
}
