<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AdminController extends Controller
{
    public function createPermission()
    {
        $role = Role::create(['name' => 'admin']);

        $permissions = [
            'create-jobs',
            'update-jobs',
            'delete-jobs',
            'update-job-applications',
            'delete-job-applications',
        ];

        $role->syncPermissions($permissions);
        dd('Permissions created!');

    }
}
