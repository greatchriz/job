<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;



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

        $lastActivity = Activity::all()->where('causer_id', auth()->user()->id); //returns the last logged activity


        dd($lastActivity);



        return view('user.dashboard',
        [
            'user' => $user,
            'userApplications' => $userApplications,
            'userVisas' => $userVisas,
            'userActivities' => $userActivities
        ]);
    }
}
