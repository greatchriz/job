@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>List of all Jobs</h3>
    <div class="text">
        Jobs Applications

    </div>
</div>

@endsection

@section('content')
    <div class="row">
        <!-- Job Block -->
        @forelse ($jobs as $job)


            <!-- Job Block -->
            <div class="job-block" style="cursor: pointer">
                <div class="news-block">
                    <div class="inner-box">

                        <div class="lower-content">

                            <h3><a href="#">User Name:&nbsp; &nbsp; <b>{{ $job->user->name }}</b></a></h3>
                            <h3><a href="#">User Email:&nbsp; &nbsp; <b>{{ $job->user->email }}</b></a></h3>
                            <h3><a href="#">Date Applied:&nbsp; &nbsp; <b>{{ $job->created_at }}</b></a></h3>
                            {{-- jobapplication cv --}}
                            <a href="{{ route('job-applications.view-cv', $job->id) }}" class="theme-btn btn-style-four">
                                Edit Job</a>



                        </div>
                    </div>
                </div>
            </div>

            @empty
                <div class="message-box error">
                    <p>You have not applied for any jobs</p>
                </div>

                <div class="col-12" style="display: flex; justify-content: center">
                        <a href="{{ route('joblist') }}" class="theme-btn btn-style-four large">Add Job</a>
                </div>

            @endforelse

        </div>
    @endsection
