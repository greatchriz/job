@extends('layouts.auth', ['title' => 'Verify your email address'])

@section('content')




    <div class="mb-4 text-sm text-gray-600">
        {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
    </div>
    @endif

        <form
            method="POST"
            action="{{ route('verification.send') }}"
        >
            @csrf

            <div class="form-group">
                <button type="submit" class="theme-btn btn-style-two">
                    {{ __('Resend Verification Email') }}
                </button>
            </div>
        </form>

        <div class="form-group">
            <a
                href="{{ route('profile.show') }}"
                class="theme-btn btn-style-one"
                type="submit"
            >{{ __('Edit Profile') }}</a>
        </div>

            <form
                method="POST"
                action="{{ route('logout') }}"
            >
                @csrf

                <div class="form-group">

                    <button
                        type="submit"
                        class="theme-btn btn-style-one"
                    >
                        {{ __('Log Out') }}
                    </button>
                </div>
            </form>

@endsection
