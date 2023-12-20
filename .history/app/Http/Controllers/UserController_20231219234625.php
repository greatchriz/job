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

        // get all the user activities where subject is JobApplication
        // $lastActivity->where('properties->key', 'value')->get();




        $userActivities = auth()->user()->activity;




        return view('user.dashboard',
        [
            'user' => $user,
            'userApplications' => $userApplications,
            'userVisas' => $userVisas,
            'userActivities' => $userActivities
        ]);
    }
}
