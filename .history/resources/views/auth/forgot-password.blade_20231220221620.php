@extends('layouts.auth', ['title' => 'Password Reset'])


@section('content')

<div class="mb-4 text-sm text-gray-600">
    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
</div>

@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

<x-validation-errors class="mb-4" />

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="form-group">
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
    </div>

    <div class="form-group">
        <button
        class="theme-btn btn-style-one"
        >
            {{ __('Email Password Reset Link') }}
        </button>
    </div>
</form>

@endsection
