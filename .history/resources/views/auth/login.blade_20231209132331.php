<x-app-layout>

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
                                                alt>
                                            <input
                                                type="email"
                                                id="email"
                                                name="email"
                                                :value="old('email')"
                                                required
                                                autofocus
                                                autocomplete="username"
                                                placeholder="info@example.com">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <label for="password">Password*</label>
                                            <input type="password"
                                                name="password" id="password"
                                                placeholder="Password" required
                                                autocomplete="current-password" />
                                            <i class="bi bi-eye-slash"
                                                id="togglePassword"></i>


                                        <x-label
                                        for="password"
                                        value="{{ __('Password') }}"
                                    />
                                    <x-input
                                        id="password"
                                        class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required
                                        autocomplete="current-password"
                                    />
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
                                    <p>Don't have an account?<a href="{{ route('register') }}" class="text-primary mx-5">Register</a>
                                    </p>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button class="primry-btn-2"
                                            type="submit">LogIn</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
