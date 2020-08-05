<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\DataTables\PermissionDataTable;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(PermissionDataTable $datatable)
    {
        return $datatable->render('admin.permissions.index');
    }

    public function create()
    {
        return view('admin.permissions.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:40',
        ]);

        $name = $request['name'];
        $permission = new Permission();
        $permission->name = $name;
        $permission->save();

        return redirect()->route('admin.permissions.index')->with('flash_message', 'Permission' . $permission->name . ' added!');
    }

    public function show($id)
    {
        return redirect('admin.permissions');
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);

        return view('admin.permissions.edit', [
            'permission' => $permission
        ]);
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|max:40',
        ]);
        $input = $request->all();
        $permission->fill($input)->save();

        return redirect()->route('admin.permissions.index')->with('flash_message', 'Permission' . $permission->name . ' updated!');
    }

    public function destroy($id)
    {
        $permission = Permission::findOrFail($id);

        if ($permission->name == "Administer") {
            return redirect()->route('admin.permissions.index')->with('flash_message', 'Cannot delete this Permission!');
        }

        $permission->delete();

        return redirect()->route('admin.permissions.index')->with('flash_message', 'Permission deleted!');
    }
}
