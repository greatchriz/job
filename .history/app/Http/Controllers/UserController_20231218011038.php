<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //dashboard method
    public function dashboard(){
        // get authenticated user and its related data
        $user = auth()->user();
        // Retrieve related data
        $userApplications = $user->applications;

        $userVisas = $user->visas;

        dd($userVisas);

        return view('user.dashboard');
    }
}
