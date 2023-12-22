@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>List of all Job Applications</h3>
    <div class="text">
        Jobs Applications

    </div>
</div>

@endsection

@section('content')



        @auth
            @if(auth()->user()->can('view all applications'))

                <div class="job-listing-wrrap">
                    <div class="row ">
                        @foreach ($jobApplications as $jobApplication)
                            <x-applied-job :jobApplication="$jobApplication" />
                        @endforeach
                    </div>
                </div>

            @else

                <div class="alert alert-danger">
                    You don't have permission to view this page
                </div>

            @endif
        @endauth


@endsection
