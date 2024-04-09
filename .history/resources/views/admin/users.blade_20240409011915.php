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

                <div class="column col-md-12">
                    <form action="{{ route('admin.users.update-balance', $user->id) }}" method="POST" class="default-form">

                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Account Balance</label>
                            <input type="number" name="account_balance" placeholder="Account Balance" value="{{ $user->balance }}">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="theme-btn btn-style-three">Update Balance</button>
                        </div>

                    </form>
                </div>


                <ul class="job-info" style="margin-bottom: 10px; margin-top: 10px">
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

                    <a href="{{ route('admin.users.edit', $user->id) }}" class="theme-btn btn-style-three">Edit User</a>
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
