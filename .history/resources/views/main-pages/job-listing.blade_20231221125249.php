@extends('normal-layout')
    @section('header')
        @include('normal-header')
    @endsection

    @section('page-title')
        @include('page-title', ['pageTitle' => 'Job Listing'])
    @endsection

    @section('content')

        <x-job-list>

            @foreach ($jobs as $job)
                <!-- Job Block -->
                <div class="job-block">
                    <div class="inner-box">
                        <div class="content">
                        <span class="company-logo"><img
                            src="{{ $job->companyLogo }}" alt></span>

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
            @endforeach

            {{ $jobs->links() }}

        </x-job-list>

    @endsection
