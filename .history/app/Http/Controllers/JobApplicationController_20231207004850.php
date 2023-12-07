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
    public function store(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048',
            'application_letter' => 'required|mimes:pdf|max:2048',
        ]);

        $cvName = time().'.'.$request->cv->extension();

        $applicationLetterName = time().'.'.$request->application_letter->extension();


        $request->cv->move(public_path('uploads'), $cvName);

        $request->application_letter->move(public_path('uploads'), $applicationLetterName);

        $jobId = $request->job_id;

        $job = Job::find($jobId);

        $mailData = [
            'receiver_name' => auth()->user()->name,
            'job_title' => $job->title,
            'company_name' => $job->company->name,
        ];

        Mail::to(auth()->user()->email)->send(new CvRecieved($mailData));

        $application = auth()->user()->applications()->create([
            'job_id' => $jobId,
            'cv' => $cvName,
            'application_letter' => $applicationLetterName,
        ]);



        /*
            Write Code Here for
            Store $fileName name in DATABASE from HERE
        */





        return back()
            ->with('success','You have successfully upload file.')
            ->with('cv', $cvName)
            ->with('application_letter', $applicationLetterName);
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
        // update the job application's status to accepted
        $jobApplication->update([
            'status' => 'accepted',
        ]);

        //create an array called $mailData

        $jobApplicationData = [
            'receiver_name' => $jobApplication->user->name,
            'receiver_email' => $jobApplication->user->email,
        ];

        $jobT = $jobApplication->job->title;

        $jobC = $jobApplication->job->company->name;

        // send email to the user

        Mail::to($jobApplication['receiver_email'])->send(new CvAccepted($jobApplicationData, $jobT, $jobC));




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
