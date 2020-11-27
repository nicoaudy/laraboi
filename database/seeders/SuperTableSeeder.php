<?php

namespace Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SuperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');


        $super = Role::create([
            'name' => 'Super User'
        ]);

        Permission::insert([
            ['guard_name' => 'web', 'name' => 'impersonate', 'created_at' => now()],

            ['guard_name' => 'web', 'name' => 'add user', 'created_at' => now()],
            ['guard_name' => 'web', 'name' => 'edit user', 'created_at' => now()],
            ['guard_name' => 'web', 'name' => 'delete user', 'created_at' => now()],
            ['guard_name' => 'web', 'name' => 'view user', 'created_at' => now()],

            ['guard_name' => 'web', 'name' => 'add role', 'created_at' => now()],
            ['guard_name' => 'web', 'name' => 'edit role', 'created_at' => now()],
            ['guard_name' => 'web', 'name' => 'delete role', 'created_at' => now()],
            ['guard_name' => 'web', 'name' => 'view role', 'created_at' => now()],

            ['guard_name' => 'web', 'name' => 'add permission', 'created_at' => now()],
            ['guard_name' => 'web', 'name' => 'edit permission', 'created_at' => now()],
            ['guard_name' => 'web', 'name' => 'delete permission', 'created_at' => now()],
            ['guard_name' => 'web', 'name' => 'view permission', 'created_at' => now()],
        ]);

        $super->givePermissionTo(Permission::all());

        $admin = User::create([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'avatar' => 'default.jpg',
            'active' => true
        ]);

        $admin->assignRole($super->name);
    }
}
