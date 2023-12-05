<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Http\Request;


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

        auth()->user()->applications()->create([
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobApplication $jobApplication)
    {
        //
    }
}
