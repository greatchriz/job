@extends('layouts.auth', ['title' => 'Login to your account'])

@section('session-status')
    @if (session('status'))

    <div class="alert alert-success alert-block mb-10">
        <strong> {{ session('status') }}
        </strong>
    </div>

    @endif

@endsection

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
    </div>


    <div class="form-group">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" type="password" name="password" required autocomplete="current-password" />
    </div>

    <div class="form-group">
        <div class="field-outer">
            <div class="input-group checkboxes square">
                <input
                    type="checkbox"
                    name="remember"
                    value=""
                    id="remember"
                >
                <label
                    for="remember"
                    class="remember"
                ><span class="custom-checkbox"></span> Remember me</label>
            </div>
            @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="pwd">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

        </div>
    </div>

    <div class="form-group">
        <button
            class="theme-btn btn-style-one"
            type="submit"
            name="log-in"
        >Log In</button>
    </div>
</form>
@endsection


