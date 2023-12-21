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
        @forelse ($userApplications as $appliedJobs)
            @include('user.job-block')

        @empty

        @endforelse

    </div>
@endsection
