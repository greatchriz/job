<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use App\Models\Job;




class UserController extends Controller
{
    //dashboard method
    public function dashboard(){
        // get authenticated user and its related data
        $user = User::find(auth()->user()->id);
        // Retrieve related data

        $userApplications = $user->applications;

        $userVisas = $user->visas;

        // get all the activities where causer_id is the authenticated user and subject is JobApplication model
        $userActivities = Activity::where('causer_id', auth()->user()->id)
            ->where('subject_type', 'App\Models\JobApplication')
            ->get();

        // get all the activities where causer_id is the authenticated user and has property key of activity_type and the value is "message"
        $userMessages = Activity::where('causer_id', auth()->user()->id)
            ->where('properties->activity_type', 'message')
            ->get();

        //flightsBooked
        $flightsBooked = $user->flights;

        return view('user.dashboard',
        [
            'user' => $user,
            'userApplications' => $userApplications,
            'userVisas' => $userVisas,
            'userActivities' => $userActivities,
            'userMessages' => $userMessages
        ]);
    }

    //jobs method
    public function jobList()
    {
        $jobs = Job::paginate(60);

        return view('user.job-list', ['jobs' => $jobs]);
    }

    // appliedjobs
    public function appliedJobs()
    {
        $user = User::find(auth()->user()->id);
        $userApplications = $user->applications;
        return view('user.applied-jobs', ['userApplications' => $userApplications]);
    }

}