<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('admin.user', [
            'users' => User::latest()->paginate(10)
        ]);
    }
    public function create()
    {
        return view('admin.userCreate');
    }
    public function edit(User $user)
    {
        return view('admin.userEdit', [
            'user' => $user
        ]);
    }
    public function store(UserRequest $request)
    {
        $profile_img = request('profile_img');
        $path = '/storage/' . $profile_img->store('profile_img');

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;
        $user->profile_img = $path;
        $user->save();
        return redirect('/admin/users');
    }
    public function update(User $user, UserRequest $request)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;
        if ($request->hasFile('profile_img')){
            $profile_img = $request->profile_img;
            Storage::disk('public')->delete(str_replace('/storage/', '', $user->profile_img));
            $path = '/storage/' . $profile_img->store('product_img');
            $user->profile_img = $path;
          }

        $user->save();
        return redirect('/admin/users');
    }
    public function destroy(User $user)
    {
        if (!$user->is_admin) {
            $user->delete();
            return redirect('/admin/users');
        }
        return redirect('/admin/users')->with('error', 'Admin user cannot be deleted!');
    }
}
