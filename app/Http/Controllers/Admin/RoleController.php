<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\DataTables\RoleDataTable;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(RoleDataTable $datatable)
    {
        return $datatable->render('admin.roles.index');
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', [
            'permissions' => $permissions
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles|max:10',
            'permissions' => 'required',
        ]);

        $name = $request['name'];
        $role = new Role();
        $role->name = $name;

        $permissions = $request['permissions'];

        $role->save();


        foreach ($permissions as $permission) {
            $p = Permission::where('id', $permission)->firstOrFail();
            $role = Role::where('name', '=', $name)->first();
            $role->givePermissionTo($p);
        }

        noty()->flash('Hey!', 'Data has been created successfully');
        return redirect()->route('admin.roles.index');
    }

    public function show($id)
    {
        return redirect('admin.roles');
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('admin.roles.edit', [
            'role' => $role,
            'permissions' => $permissions
        ]);
    }

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|max:10|unique:roles,name,' . $id,
            'permissions' => 'required',
        ]);

        $input = $request->except(['permissions']);
        $permissions = $request['permissions'];
        $role->fill($input)->save();

        $p_all = Permission::all();

        foreach ($p_all as $p) {
            $role->revokePermissionTo($p);
        }

        foreach ($permissions as $permission) {
            $p = Permission::where('id', $permission)->firstOrFail();
            $role->givePermissionTo($p);
        }

        noty()->flash('Hey!', 'Data has been updated successfully');
        return redirect()->route('admin.roles.index');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        noty()->danger('Hey!', 'Data has been deleted successfully');
        return redirect()->route('admin.roles.index');
    }
}
