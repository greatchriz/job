<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create jobs']);
        Permission::create(['name' => 'edit jobs']);
        Permission::create(['name' => 'update jobs']);
        Permission::create(['name' => 'delete jobs']);
        Permission::create(['name' => 'view all applications']);
        Permission::create(['name' => 'edit applications']);
        Permission::create(['name' => 'update applications']);
        Permission::create(['name' => 'delete applications']);

        // create roles
        $role = Role::create(['name' => 'admin']);

        // add all permissions
        $role->givePermissionTo(Permission::all());

        // get a user with the name admin
        $user = \App\Models\User::where('name', 'admin')->first();

        // assign the role to the user
        $user->assignRole($role);

    }
}
