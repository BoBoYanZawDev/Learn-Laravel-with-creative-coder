<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::latest()->paginate(10);
        return view('admin.permission.index',compact('permissions'));
    }
    public function create(){
        return view('admin.permission.create');
    }
    public function edit(Permission $permission){
        return view('admin.permission.edit',compact('permission'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|unique:permissions,name'
        ]);
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->save();
        return redirect()->route('permissions.index')->with('success','Created Successfully');
    }
    public function update(Request $request,Permission $permission){
        $request->validate([
             'name' => 'required|string|unique:permissions,name'
        ]);
        $permission->name = $request->name;
        $permission->save();
        return redirect()->route('permissions.index')->with('success','Updated Successfully');

    }
    public function destroy(Permission $permission){
        $permission->delete();
        return redirect()->route('permissions.index')->with('success','Deleted Successfully');
    }
}
