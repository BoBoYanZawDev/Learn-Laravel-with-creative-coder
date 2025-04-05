<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $roles = Role::latest()->paginate(10);
        return view('admin.roles.index',compact('roles'));
    }
    public function create(){
        $permissions = Permission::all();
        return view('admin.roles.create',compact('permissions'));
    }
    public function edit(Role $role){
        $permissions = Permission::all();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $role->id)
        ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
        ->all();
        return view('admin.roles.edit',compact('role','permissions','rolePermissions'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|unique:roles,name',
            'permission' => 'required',
        ]);
        try {
            $permissionsID = array_map(
                function ($value) {
                    return (int)$value;
                },
                $request->input('permission')
            );
            $role = Role::create(['name' => $request->input('name')]);
            $role->syncPermissions($permissionsID);
            return redirect()->route('roles.index')->with('success','Created Successfully!');
        } catch (Exception $e) {
            return redirect()->route('roles.index')->with('error','Please Try again!');
        }
    }
    public function update(Request $request, Role $role){
        $request->validate([
            'name' => 'required|string|unique:roles,name,'.$role->id,
            'permission' => 'required',
        ]);
        try {
            $permissionsID = array_map(
                function ($value) {
                    return (int)$value;
                },
                $request->input('permission')
            );
            $role->update(['name' => $request->input('name')]);
            $role->syncPermissions($permissionsID);
            return redirect()->route('roles.index')->with('success','Updated Successfully!');
        } catch (Exception $e) {
            return redirect()->route('roles.index')->with('error','Please Try again!');
        }

    }
    public function destroy(Role $role){
            $role->delete();
             return redirect()->route('roles.index')->with('success','Deleted Successfully');
    }
}
