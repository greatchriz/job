@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>List of all Users</h3>

</div>

@endsection

@section('content')
    <x-admin-content :users="$users">
        <!-- Job Block -->
        <div class="job-block">
            <div class="inner-box">
                <div class="content">
                    <span class="company-logo"><img src="{{ $user->name }}" alt></span>

                    <h4><a href="#">{{ $user->title }}</a></h4>

                    <p style="font-weight: 700; margin-bottom: 5px">{{ $user->companyName }}</p>



                    <p style="font-weight: 500; margin-bottom: 10px">{{ $user->description }}</p>

                    <ul class="job-info" style="margin-bottom: 5px">
                        <li style="fot-weight: 500"><span class="icon flaticon-briefcase"></span>
                            Segment</li>
                        <li style="fot-weight: 500"><span class="icon flaticon-map-locator"></span>
                            {{ $user->jobLocation }}</li>
                        <li style="fot-weight: 500"><span class="icon flaticon-clock-3"></span> {{ \Carbon\Carbon::parse($user->postedDate)->diffForHumans() }}</li>
                        <li style="fot-weight: 500"><span class="icon flaticon-money"></span> {{ $user->salary }}</li>
                    </ul>
                    <ul class="job-other-info">
                        <li class="time">Full Time</li>
                        <li class="privacy">Private</li>
                        <li class="required">Urgent</li>
                    </ul>
                    <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                </div>

                {{-- <blockquote class="blockquote-style-one mb-2 mt-2" style="padding: 5px">
                    <p style="font-weight: 500">The offer expires on {{ \Carbon\Carbon::parse($user->deadline)->toFormattedDayDateString() }}</p>

                </blockquote>

                <div class="col-3" style="margin: 5px">
                    <div class="btn-box">

                        <a href="{{ route('admin.jobs.edit', $user->id) }}" class="theme-btn btn-style-three">Edit Job</a>
                        <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
                    </div>
                </div> --}}

            </div>

        </div>

    </x-admin-content>
@endsection
