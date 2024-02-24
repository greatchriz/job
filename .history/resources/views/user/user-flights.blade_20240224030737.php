@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <h3>List of Flights You Booked</h3>
    <div class="text">
        Flights Booked List
    </div>
</div>

@endsection

@section('content')
    <div class="row">

        <div class="message-box error">
            <p>You have not Booked any flight</p>
        </div>

        {{-- <div class="col-12" style="display: flex; justify-content: center">
                <a href="{{ route('joblist') }}" class="theme-btn btn-style-four large">Search For Jobs</a>
        </div> --}}

    </div>
@endsection
