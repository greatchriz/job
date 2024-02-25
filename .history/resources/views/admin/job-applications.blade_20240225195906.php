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
    <div class="row">
        <!-- Job Block -->
        @forelse ($jobApplications as $job)


            <!-- Job Block -->
            <div class="job-block" style="cursor: pointer">
                <div class="news-block">
                    <div class="inner-box">

                        <div class="lower-content">

                            <h3><a href="blog-single.html">{{ $job->user->name }}</a></h3>
                            <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>

                        </div>
                    </div>
                </div>
                <div class="inner-box">
                    <div class="content">
                    <span class="company-logo"><img
                        src="{{ $job->job->companyLogo }}" alt></span>

                    <h4><a href="#">{{ $job->job->title }}</a></h4>

                    <p style="font-weight: 700; margin-bottom: 5px">{{ $job->job->companyName }}</p>



                    <p style="font-weight: 500; margin-bottom: 10px">{{ $job->job->description }}</p>

                    <ul class="job-info" style="margin-bottom: 5px">
                        <li style="fot-weight: 500"><span class="icon flaticon-briefcase"></span>
                        Segment</li>
                        <li style="fot-weight: 500"><span class="icon flaticon-map-locator"></span>
                    {{ $job->job->jobLocation }}</li>
                        <li style="fot-weight: 500"><span class="icon flaticon-clock-3"></span> {{ \Carbon\Carbon::parse($job->postedDate)->diffForHumans() }}</li>
                        <li style="fot-weight: 500"><span class="icon flaticon-money"></span> {{ $job->job->salary }}</li>
                    </ul>
                    <ul class="job-other-info">
                        {{-- if job status is approved --}}
                        @if ($job->status == 'accepted')
                        <li class="privacy">Approved</li>
                        @elseif($job->status == 'pending')
                        <li class="required">Pending</li>
                        @elseif($job->status == 'rejected')
                        <li class="required">Rejected</li>
                        @endif
                    </ul>
                    <button class="bookmark-btn"><span
                        class="flaticon-bookmark"></span></button>
                    </div>

                    {{-- <blockquote class="blockquote-style-one mb-2 mt-2" style="padding: 5px">
                        <p style="font-weight: 500">The offer expires on {{ \Carbon\Carbon::parse($job->deadline)->toFormattedDayDateString() }}</p>

                    </blockquote> --}}

                    <div class="row">
                        @if($job->status == 'accepted')
                            <div class="col-3" style="margin-right: 35px">
                                <div class="btn-box">
                                    <form action="/job-applications/{{ $job->id }}/reject" method="post" id="job-rejected">
                                        @csrf
                                        @method('put')

                                        <a href="#" onclick="event.preventDefault(); document.getElementById('job-rejected').submit();"
                                        class="theme-btn btn-style-two">
                                        Reject Application</a>
                                        <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>

                                    </form>
                                </div>
                            </div>
                        @elseif($job->status == 'pending')
                        <div class="col-3" style="margin: 5px">

                            <div class="btn-box">
                                <form action="/job-applications/{{ $job->id }}/update" method="post" id="job-approved">
                                    @csrf
                                    @method('put')

                                    <a href="#" onclick="event.preventDefault(); document.getElementById('job-approved').submit();"
                                    class="theme-btn btn-style-four">
                                    Approve Application</a>
                                    <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>

                                </form>

                            </div>
                        </div>
                        @else

                        <div class="col-3" style="margin: 5px">
                            <div class="btn-box">
                                <form action="/job-applications/{{ $job->id }}/update" method="post" id="job-approved">
                                    @csrf
                                    @method('put')

                                    <a href="#" onclick="event.preventDefault(); document.getElementById('job-approved').submit();"
                                    class="theme-btn btn-style-four">
                                    Approve Application</a>
                                    <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
                                </form>
                            </div>
                        @endif

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
