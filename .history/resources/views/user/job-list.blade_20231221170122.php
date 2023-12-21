@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>List of Available Jobs</h3>
    <div class="text">Search for a job</div>
</div>

@endsection

@section('content')

    @foreach ($jobs as $job)
        @include('user.job-block')
    @endforeach

    {{ $jobs->links() }}

@endsection
