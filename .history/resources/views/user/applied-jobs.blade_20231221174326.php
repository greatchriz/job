@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>List of Jobs You Applied For</h3>
    <div class="text">
        Applied Jobs List
    </div>
</div>

@endsection

@section('content')
    <div class="row">
        <!-- Job Block -->
        @forelse ($userApplications as $job)
<!-- Job Block -->
<div class="job-block" style="cursor: pointer">
    <div class="inner-box">
        <div class="content">
        <span class="company-logo"><img
            src="{{ $job->job->companyLogo }}" alt></span>

        <h4><a href="#">{{ $job->title }}</a></h4>

        <p style="font-weight: 700; margin-bottom: 5px">{{ $job->companyName }}</p>



        <p style="font-weight: 500; margin-bottom: 10px">{{ $job->description }}</p>

        <ul class="job-info" style="margin-bottom: 5px">
            <li style="fot-weight: 500"><span class="icon flaticon-briefcase"></span>
            Segment</li>
            <li style="fot-weight: 500"><span class="icon flaticon-map-locator"></span>
        {{ $job->jobLocation }}</li>
            <li style="fot-weight: 500"><span class="icon flaticon-clock-3"></span> {{ \Carbon\Carbon::parse($job->postedDate)->diffForHumans() }}</li>
            <li style="fot-weight: 500"><span class="icon flaticon-money"></span> {{ $job->salary }}</li>
        </ul>
        <ul class="job-other-info">
            <li class="time">Full Time</li>
            <li class="privacy">Private</li>
            <li class="required">Urgent</li>
        </ul>
        <button class="bookmark-btn"><span
            class="flaticon-bookmark"></span></button>
        </div>

        <blockquote class="blockquote-style-one mb-2 mt-2" style="padding: 5px">
            <p style="font-weight: 500">The offer expires on {{ \Carbon\Carbon::parse($job->deadline)->toFormattedDayDateString() }}</p>

        </blockquote>

        <div class="col-3" style="margin: 5px">
            <div class="btn-box">

                <a
                    href="/jobs/{{ $job->id }}"
                    class="theme-btn btn-style-three"
                >Apply For Job</a>
                <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
            </div>
        </div>

    </div>

</div>

        @empty
            <div class="message-box error">
                <p>You have not applied for any jobs</p>
            </div>

            <div class="col-12" style="display: flex; justify-content: center">
                    <a href="{{ route('joblist') }}" class="theme-btn btn-style-four large">Search For Jobs</a>
            </div>

        @endforelse

    </div>
@endsection
