<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;
use App\Models\Job;
use App\Models\Transaction;



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
            'flightsBooked' => $flightsBooked,
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

    //userMessages
    public function userMessages()
    {
        $user = User::find(auth()->user()->id);
        $userMessages = Activity::where('causer_id', $user)->where('properties->activity_type', 'message')->get();
        return view('user.messages', ['userMessages' => $userMessages]);
    }

    //userFlights
    public function userFlights()
    {
        $user = User::find(auth()->user()->id);
        $userFlights = $user->flights;
        return view('user.user-flights', ['userFlights' => $userFlights]);
    }

    //return user with transactions relationship
    public function accountBalance()
    {
        $user = User::with('transactions')->find(auth()->user()->id);
        return view('user.account-balance', ['user' => $user]);
    }

    //deposit: user deposit form page
    public function deposit()
    {
        $user = User::find(auth()->user()->id);
        return view('user.deposit', ['user' => $user]);
    }

    //depositStore: process the deposit and update user's account balance
    public function depositStore(Request $request)
    {

        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:0.01', // Assuming the minimum deposit is $0.01
            'crypto_account' => 'required',
        ]);

        // number of transactions
        $numberOfTransactions = Transaction::count() + 1;

        $transactionID = 'QEDSDAS13KJ0' . $numberOfTransactions;

        $user = User::find(auth()->user()->id);

        $transaction = $user->transactions()->create([
            'transaction_id' => $transactionID,
            'amount' => $validatedData['amount'],
            'crypto_account' => $validatedData['crypto_account'],
            'type' => $request->type,
        ]);

        // Redirect to dashboard with success message
        return redirect()->route('deposit.complete')->with('status', 'Deposit successful.');
    }

    //depositComplete: display the page that shows the details of the crypto account he selected and how to complete the deposit
    public function depositComplete()
    {
        return view('user.deposit-complete');
    }

}
