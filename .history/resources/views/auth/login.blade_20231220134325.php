@extends('layouts.auth', ['title' => 'Login to'])

@section('session-status')
    @if (session('status'))

    <div class="alert alert-success alert-block mb-10">
        <strong> {{ session('status') }}
        </strong>
    </div>

    @endif

@endsection

@section('content')
<form
    method="post"
    action="https://creativelayers.net/themes/superio/add-parcel.html"
>
    <div class="form-group">
        <label>Username</label>
        <input
            type="text"
            name="username"
            placeholder="Username"
            required
        >
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


<div class="login-area pt-120 mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-wrapper">
                    <div class="form-title">
                        <h3>Log In Here!</h3>
                        <span></span>
                    </div>

                    <x-validation-errors class="mb-4" />

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form
                        method="POST"
                        action="{{ route('login') }}"
                    >
                        @csrf
                        <div class="row">


                            <div class="col-lg-12">
                                <div class="form-inner mb-25">

                                    <label for="email">Email*</label>
                                    <div class="input-area">
                                        <img
                                            src="assets/images/icon/email-2.svg"
                                            alt
                                        >
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            :value="old('email')"
                                            required
                                            autofocus
                                            autocomplete="username"
                                            placeholder="info@example.com"
                                        >
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-inner">
                                    <label for="password">Password*</label>
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        placeholder="Password"
                                        required
                                        autocomplete="current-password"
                                    />
                                    <i
                                        class="bi bi-eye-slash"
                                        id="togglePassword"
                                    ></i>
                                    </label>
                                </div>
                            </div>

                            <div class="block mt-4">
                                <label
                                    for="remember_me"
                                    class="flex items-center"
                                >
                                    <x-checkbox
                                        id="remember_me"
                                        name="remember"
                                    />
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>



                            <div class="flex items-center justify-between mt-4 mb-25">
                                @if (Route::has('password.request'))
                                <a
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('password.request') }}"
                                >
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif
                                <p>Don't have an account?<a
                                        href="{{ route('register') }}"
                                        class="text-primary mx-5"
                                    >Register</a>
                                </p>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-inner">
                                    <button
                                        class="primry-btn-2"
                                        type="submit"
                                    >LogIn</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
