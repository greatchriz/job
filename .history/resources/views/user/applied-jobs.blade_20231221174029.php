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
            @include('user.job-block')

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
