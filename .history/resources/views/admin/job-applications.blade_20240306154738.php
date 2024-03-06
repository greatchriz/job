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

                        {{-- add a style attribute to this div below to add a border bottom --}}
                        <div class="lower-content b-bottom">
                            <h3 class="mtp-15"><a href="#">User Email:&nbsp; &nbsp; <b>{{ $job->user->email }}</b></a></h3>
                            <h3 class="mtp-15"><a href="#">Date Applied:&nbsp; &nbsp; <b>{{ $job->created_at }}</b></a></h3>
                            {{-- jobapplication cv --}}
                            <a href="{{ route('job-applications.view-cv', $job->id) }}" class="theme-btn btn-style-four mtp-15">
                                View CV</a>
                        </div>

                        <div class="lower-content mtp-40 b-bottom">
                            <div class="row">
                                <div class="col-3">
                                    <span>
                                        <img src="{{ $job->job->companyLogo }}" alt>
                                    </span>
                                </div>
                                <div class="col-9">
                                    <h4>
                                        <a href="{{ route('admin.jobs.edit', $job->job->id) }}">{{ $job->job->title }}</a>
                                    </h4>
                                </div>
                            </div>
                            <h3 class="mtp-15"><a href="#">Company Name:&nbsp; &nbsp; <b>{{ $job->job->companyName }}</b></a></h3>
                            <h3 class="mtp-15"><a href="#">Job Description:&nbsp; &nbsp; <b>{{ $job->job->description }}</b></a></h3>
                            {{-- {{ $job->job->jobLocation }} --}}
                            <h3 class="mtp-15"><a href="#">Job Location:&nbsp; &nbsp; <b>{{ $job->job->jobLocation }}</b></a></h3>
                            {{-- {{ \Carbon\Carbon::parse($job->postedDate)->diffForHumans() }} --}}
                            <h3 class="mtp-15"><a href="#">Posted Date:&nbsp; &nbsp; <b>{{ $job->postedDate }}</b></a></h3>
                            {{-- {{ $job->job->salary }} --}}
                            <h3 class="mtp-15"><a href="#">Salary:&nbsp; &nbsp; <b>{{ $job->job->salary }}</b></a></h3>
                            <p>
                                {{ $job->status }}
                            </p>

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

                            @if($job->status == 'accepted')
                                <form action="/job-applications/{{ $job->id }}/reject" method="post" id="job-rejected">
                                    @csrf
                                    @method('put')

                                    <a href="#" onclick="event.preventDefault(); document.getElementById('job-rejected').submit();"
                                    class="theme-btn btn-style-two mtp-15">
                                    Reject Application</a>
                                </form>
                            {{-- if job status is pending or rejected--}}
                            @elseif($job->status == 'pending')
                                <div class="row">
                                    <div class="col-6">
                                        <form action="/job-applications/{{ $job->id }}/reject" method="post" id="job-rejected">
                                            @csrf
                                            @method('put')

                                            <a href="#" onclick="event.preventDefault(); document.getElementById('job-rejected').submit();"
                                            class="theme-btn btn-style-two mtp-15">
                                            Reject Application</a>
                                        </form>
                                    </div>

                                    <div class="col-6">
                                        <form action="/job-applications/{{ $job->id }}/update" method="post" id="job-approved">
                                            @csrf
                                            @method('put')

                                            <a href="#" onclick="event.preventDefault(); document.getElementById('job-approved').submit();"
                                            class="theme-btn btn-style-four mtp-15">
                                            Approve Application</a>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <form action="/job-applications/{{ $job->id }}/update" method="post" id="job-approved">
                                    @csrf
                                    @method('put')

                                    <a href="#" onclick="event.preventDefault(); document.getElementById('job-approved').submit();"
                                    class="theme-btn btn-style-four mtp-15">
                                    Approve Application</a>
                                </form>
                            @endif

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
