<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\General;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.pages.roles.index', ['roles' => Role::withCount('users','permissions')->get()]);
    }

    public function getAddRole()
    {
        return view('admin.pages.roles.add', ['permissions' => Permission::all(),'routes'=>General::getURLS()]);
    }

    public function postAddRole(Request $request)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,name',
            'default_route'=>'required',
            'permissions.*' => 'required|exists:permissions,id',
        ]);

        $role = Role::create(['name' => $request->input('role_name'),'default_route' => $request->input('default_route')]);
        if ($role) {
            if ($role->givePermissionTo($request->input('permissions'))) {
                return redirect()->route('admin.roles')->with(['success' => 'Role created successfully.']);
            }
        }
        return redirect()->back()->with(['fail' => 'Role could not be created.']);
    }

    public function getEditRole($role)
    {
        $role = Role::findorFail($role);
        return view('admin.pages.roles.edit', ['role' => $role,'routes'=>General::getURLS(), 'permissions' => Permission::orderBy('name','asc')->get(), 'role_permissions' => $role->permissions()->get()->pluck('id')->toArray()]);
    }

    public function postEditRole(Request $request, $role)
    {
        $role = Role::findorFail($role);
        $request->validate([
            'role_name' => 'required|unique:roles,name,' . $role->id,
            'default_route'=>'required',
            'permissions.*' => 'required|exists:permissions,id',
        ]);
        $old = $role;

        $role->name = $request->input('role_name');
        $role->default_route = $request->input('default_route');
        if ($role->update()){
            if ($role->syncPermissions($request->input('permissions'))){
                return redirect()->back()->with(['success' => 'Role updated successfully.']);
            }
        }
        return redirect()->back()->with(['fail' => 'Role could not be updated, please try again.']);
    }
}