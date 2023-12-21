@extends('layouts.auth', ['title' => 'Create an account'])

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

    <div>
        <x-label for="name" value="{{ __('Name') }}" />
        <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div class="mt-4">
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" />
    </div>

    <div class="mt-4">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
    </div>

    <div class="mt-4">
        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
    </div>

    <div class="form-group">
        <div class="field-outer">
            <div class="input-group checkboxes square">
                <input
                    type="checkbox"
                    name="remember-me"
                    value=""
                    id="remember"
                >
                <label
                    for="remember"
                    class="remember"
                ><span class="custom-checkbox"></span> Remember me</label>
            </div>
            <a
                href="#"
                class="pwd"
            >Forgot password?</a>
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


