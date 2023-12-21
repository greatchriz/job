<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Console\Application;
use Illuminate\Http\Request;
use Mail;
use App\Mail\CvRecieved;
use App\Mail\CvAccepted;




class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Job $job)
    {
        // return view('job-applications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, JobApplication $jobApplication)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048',
        ]);

        $cvName = time().'.'.$request->cv->extension();



        $request->cv->move(public_path('uploads'), $cvName);

        $jobId = $request->job_id;

        $job = Job::find($jobId);

        $mailData = [
            'receiver_name' => auth()->user()->name,
            'job_title' => $job->title,
            'company_name' => $job->companyName,
        ];


        Mail::to(auth()->user()->email)->send(new CvRecieved($mailData));



        activity()->performedOn(User::find(auth()->user()->id))
               ->causedBy(auth()->user())
               ->withProperties(['mailClass' => CvRecieved::class, 'mailData' => $mailData, 'activity_type' => 'message'])
               ->log('Applied for a job');

        $application = auth()->user()->applications()->create([
            'job_id' => $jobId,
            'cv' => $cvName,
        ]);

        activity()->performedOn($jobApplication)
               ->causedBy(auth()->user())
               ->withProperties(['job_id' => $jobId])
               ->log('Created a job application');

        return back()
            ->with('success','You have successfully submitted Your CV.')
            ->with('cv', $cvName);

    }

    /**
     * Display the specified resource.
     */
    public function show(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobApplication $jobApplication)
    {


        //create an array called $mailData
        $appUrl = env('APP_URL');


        $jobApplicationData = [
            'receiver_name' => $jobApplication->user->name,
            'receiver_email' => $jobApplication->user->email,
            'job_title' => $jobApplication->job->title,
            'company_name' => $jobApplication->job->companyName,
            'company_location' => $jobApplication->job->jobLocation,
            'job_deadline' => $jobApplication->job->deadline,
            'app_url' => $appUrl,
        ];

        $userMail = $jobApplication->user->email;



        Mail::to($userMail)->send(new CvAccepted($jobApplicationData));

        activity()->performedOn($jobApplication->user)
               ->causedBy($jobApplication->user)
               ->withProperties(['mailClass' => CvAccepted::class, 'jobApplicationData' => $jobApplicationData])
               ->log('Job application has been accepted');


        // update the job application's status to accepted
        $jobApplication->update([
            'status' => 'accepted',
        ]);


        //return back with message
        return back()->with('success', 'Application has been accepted');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $jobApplication)
    {
        //
    }
}
