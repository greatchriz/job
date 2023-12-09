<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\FormInput;


class AdminController extends Controller
{
    public function createPermission()
    {
        $role = Role::create(['name' => 'admin']);

        // $permissions = Permission::create(['name' => 'create-jobs', 'name' => 'update-jobs', 'name' => 'delete-jobs']);


        $permissionsName = [
            'create-jobs',
            'view-jobs',
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

    public function jobApplications()
    {
        $jobApplications = \App\Models\JobApplication::all();


        return view('admin.job-applications', [
            'jobApplications' => $jobApplications
        ]);

    }

    // formInputs

    public function formInputs()
    {
        $formInputs = \App\Models\FormInput::all();
        return view('admin.form-inputs', [
            'formInputs' => $formInputs
        ]);

    }

    //formInputsEdit

    public function formInputsEdit(FormInput $formInput)
    {
        $firstName = FormInput::find($formInput->id);

        $firstNameColumn = array_keys($firstName->getOriginal());

        $arrayValues = array_values($firstName->getOriginal());
dd([$firstNameColumn, $arrayValues]);
         return view('admin.form-inputs-edit', [
             'formInput' => $formInput
         ]);

    }
}

