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
        <x-label for="name" value="{{ __('Name') }}" />
        <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <div class="form-group">
        <label>Password</label>
        <input
            id="password-field"
            type="password"
            name="password"
            value=""
            placeholder="Password"
        >
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


