<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminController extends Controller
{
    public function createPermission()
    {
        $role = Role::create(['name' => 'admin']);

        // $permissions = Permission::create(['name' => 'create-jobs', 'name' => 'update-jobs', 'name' => 'delete-jobs']);


        $permissionsName = [
            'create-jobs',
            'update-jobs',
            'delete-jobs',
            'update-job-applications',
            'delete-job-applications',
        ];


        foreach ($permissionsName as $permission) {
            Permission::create(['name' => $permission]);
        }

        $permissions = Permission::all();

        $role->syncPermissions($permissions);

        dd('Permissions created!');

    }

    public function assignRole()
    {
        $user = User::where('name', 'admin')->first();
        $user->assignRole('admin');
        dd('Role assigned!');
    }
}
