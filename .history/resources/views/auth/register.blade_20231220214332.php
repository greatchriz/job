@extends('layouts.auth', ['title' => 'Create an account'])


@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <x-label for="name" value="{{ __('Name') }}" />
        <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div class="form-group">
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
    </div>

    <div class="form-group">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="form-group">
        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
        <x-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>

    <div class="form-group">
        <button
            class="theme-btn btn-style-one"
            type="submit"
        >Register</button>
    </div>
</form>
@endsection

@section('bottom-box')
    <div class="text">Already registered? <a href="{{ route('login') }}">Log In</a></div>
@endsection
