@extends('layouts.dashboard.layout')

@section('upper-title')

{{-- user messages --}}
<div class="upper-title-box">
    <h3>Notifications</h3>
    <div class="text">View your notifications</div>
</div>

@endsection

@section('content')

    @foreach ($jobs as $job)
        @include('user.job-block')
    @endforeach

    {{ $jobs->links() }}

@endsection
