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
                <p>Message Description Lorem ipsum dolor sit amet. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum placeat similique suscipit minus consectetur soluta cupiditate magni necessitatibus ad delectus voluptate quasi facilis perferendis, quo tempora ex, id ab dolor natus possimus.</p>
            </div>
        @empty
            <div class="message-box error">
                <p>You have no notifications</p>
            </div>
        @endforelse
    </div>
@endsection
