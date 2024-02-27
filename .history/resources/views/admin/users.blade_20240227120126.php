@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>List of all Users</h3>

</div>

@endsection

@section('content')
<div class="row">
    <!-- Job Block -->
    @forelse ($users as $user)

    <!-- Job Block -->
    <div class="job-block">
        <div class="inner-box">
            <div class="content">
                <span class="company-logo"><img src="{{ $user->profile_photo }}" alt></span>

                <h4><a href="#">{{ $user->name }}</a></h4>

                <p style="font-weight: 700; margin-bottom: 5px">{{ $user->email }}</p>



                <p style="font-weight: 500; margin-bottom: 10px">{{ $user->account_balance }}</p>

                <ul class="job-info" style="margin-bottom: 5px">
                    {{-- <li style="fot-weight: 500"><span class="icon flaticon-briefcase"></span>
                        Segment</li>
                    <li style="fot-weight: 500"><span class="icon flaticon-map-locator"></span>
                        {{ $job->jobLocation }}</li> --}}
                    <li style="fot-weight: 500"><span class="icon flaticon-clock-3"></span> {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</li>
                    {{-- <li style="fot-weight: 500"><span class="icon flaticon-money"></span> {{ $job->salary }}</li> --}}
                </ul>

                <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
            </div>


            <div class="col-3" style="margin: 5px">
                <div class="btn-box">

                    <a href="{{ route('admin.users.edit', $user->id) }}" class="theme-btn btn-style-three">Edit Job</a>
                    <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
                </div>
            </div>

        </div>

    </div>

    @empty
    <div class="message-box error">
        <p>You have not created any jobs</p>
    </div>

    <div class="col-12" style="display: flex; justify-content: center">
        <a href="{{ route('admin.users.create') }}" class="theme-btn btn-style-four large">Add User</a>
    </div>

    @endforelse

</div>
@endsection
