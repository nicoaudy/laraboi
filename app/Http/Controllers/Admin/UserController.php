<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\DataTables\UserDataTable;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(UserDataTable $datatable)
    {
        return $datatable->render('admin.users.index');
    }

    public function create()
    {
        $roles = Role::get();
        return view('admin.users.create', [
            'roles' => $roles
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:120',
            'username' => 'required|max:120',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'email' => $request->email,
            'username' => $request->username,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'avatar' => 'default.jpg'
        ]);

        $roles = $request['roles'];
        if (isset($roles)) {
            foreach ($roles as $role) {
                $role_r = Role::where('id', $role)->firstOrFail();
                $user->assignRole($role_r);
            }
        }

        noty()->flash('Hey!', 'Data has been created successfully');
        return redirect()->route('admin.users.index');
    }

    public function show($id)
    {
        return response()->json(User::find($id));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|max:120',
            'email' => 'required|username|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|min:6|confirmed'
        ]);

        $roles = $request['roles'];
        $user->fill([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ])->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);
        } else {
            $user->roles()->detach();
        }

        noty()->flash('Hey!', 'Data has been updated successfully');
        return redirect()->route('admin.users.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        noty()->danger('Hey!', 'Data has been deleted successfully');
        return redirect()->route('admin.users.index');
    }
}
