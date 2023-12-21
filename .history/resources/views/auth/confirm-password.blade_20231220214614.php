@extends('layouts.auth', ['title' => 'Create an account'])


@section('content')

<div class="mb-4 text-sm text-gray-600">
    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
</div>

<x-validation-errors class="mb-4" />

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <div class="form-group">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
    </div>

    <div class="form-group">
        <button class="theme-btn btn-style-one">
            {{ __('Confirm') }}
        </button>
    </div>
</form>
@endsection
