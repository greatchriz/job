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
        $formInput = FormInput::find($formInput->id);

        $formInputColumn = array_keys($formInput->getOriginal());

        $arrayValues = array_values($formInput->getOriginal());

        // convert both arrays into a key-value pair

        $data = array_combine($formInputColumn, $arrayValues);

        $title = $formInput->label;


        // dd($data);
         return view('admin.form-inputs-edit', [
             'data' => $data,
             'id' => $formInput->id,
             'title' => $title
         ]);

    }

    //formInputsUpdate

    public function formInputsUpdate(Request $request, FormInput $formInput)
    {
        $formInput = FormInput::find($formInput->id);
        $formInput->update($request->all());
        return redirect()->route('admin.form-inputs')->with('success', 'FormInput updated successfully');

    }
}

