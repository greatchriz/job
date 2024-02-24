@extends('layouts.dashboard.layout')

@section('upper-title')

<div class="upper-title-box">
    <!--this is a job Application Form -->
    <h4> Make Deposit</h4>
    <div class="text">
        Fill this form to make deposit.
    </div>
</div>

@endsection

@section('content')
<form method="post" action="https://creativelayers.net/themes/superio/add-parcel.html">
    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" placeholder="Username" required>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input id="password-field" type="password" name="password" value="" placeholder="Password">
    </div>

    <div class="form-group">
        <div class="field-outer">
            <div class="input-group checkboxes square">
                <input type="checkbox" name="remember-me" value="" id="remember">
                <label for="remember" class="remember"><span class="custom-checkbox"></span> Remember me</label>
            </div>
            <a href="#" class="pwd">Forgot password?</a>
        </div>
    </div>

    <div class="form-group">
        <button class="theme-btn btn-style-one" type="submit" name="log-in">Log In</button>
    </div>
</form>
@endsection
