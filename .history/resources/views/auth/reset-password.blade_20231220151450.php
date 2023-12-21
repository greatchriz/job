@extends('layouts.auth', ['title' => 'Create an account'])


@section('content')
<form
    method="POST"
    action="{{ route('password.update') }}"
>
    @csrf

    <input
        type="hidden"
        name="token"
        value="{{ $request->route('token') }}"
    >

    <div class="form-group">
        <x-label
            for="email"
            value="{{ __('Email') }}"
        />
        <x-input
            id="email"
            type="email"
            name="email"
            :value="old('email', $request->email)"
            required
            autofocus
            autocomplete="username"
        />
    </div>

    <div class="form-group">
        <x-label
            for="password"
            value="{{ __('Password') }}"
        />
        <x-input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="new-password"
        />
    </div>

    <div class="mt-4">
        <x-label
            for="password_confirmation"
            value="{{ __('Confirm Password') }}"
        />
        <x-input
            id="password_confirmation"
            class="block mt-1 w-full"
            type="password"
            name="password_confirmation"
            required
            autocomplete="new-password"
        />
    </div>

    <div class="flex items-center justify-end mt-4">
        <x-button>
            {{ __('Reset Password') }}
        </x-button>
    </div>
</form>
@endsection
