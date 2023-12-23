@extends('layouts.dashboard.layout')

@section('upper-title')

{{-- user messages --}}
<div class="upper-title-box">
    <h3>Notifications</h3>
    <div class="text">View your notifications</div>
</div>

@endsection

@section('content')
    <div class="column col-lg-6 col-md-12 col-sm-12">
        @forelse ($userMessages as $userMessage)
            <div class="message-box info">
                <p>Info: User pending action</p>
            </div>
        @empty
            <div class="message-box error">
                <p>You have no notifications</p>
            </div>
        @endforelse
    </div>
@endsection
