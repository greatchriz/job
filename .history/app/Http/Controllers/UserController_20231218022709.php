<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //dashboard method
    public function dashboard(){
        // get authenticated user and its related data
        $user = User::find(auth()->user()->id);
        // Retrieve related data

        $userApplications = $user->applications;

        $userVisas = $user->visas;

        return view('user.dashboard',
        [
            'user' => $user,
            'userApplications' => $userApplications,
            'userVisas' => $userVisas
        ]);
    }
}
