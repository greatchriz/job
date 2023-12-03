<x-app-layout>

    <div class="login-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-wrapper">
                        <div class="form-title">
                            <h3>Register Account!</h3>
                            <span></span>
                        </div>

                        <x-validation-errors class="mb-4" />

                        <form
                            method="POST"
                            action="{{ route('register') }}"
                        >
                            <div class="row">

                                @csrf

                                <div class="col-lg-12">
                                    <div class="form-inner mb-25">
                                        <x-label
                                            for="name"
                                            value="{{ __('Name') }}"
                                        />
                                        <x-input
                                            id="name"
                                            class="block mt-1 w-full"
                                            type="text"
                                            name="name"
                                            :value="old('name')"
                                            required
                                            autofocus
                                            autocomplete="name"
                                        />
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-inner mb-25">
                                        <x-label
                                            for="email"
                                            value="{{ __('Email') }}"
                                        />
                                        <x-input
                                            id="email"
                                            class="block mt-1 w-full"
                                            type="email"
                                            name="email"
                                            :value="old('email')"
                                            required
                                            autofocus
                                            autocomplete="username"
                                        />
                                    </div>
                                </div>

                                {{-- for password --}}

                                <div class="col-lg-12">
                                    <div class="form-inner mb-25">
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
                                            autocomplete="new-password"
                                        />
                                    </div>
                                </div>

                                {{-- password_confirmation --}}

                                <div class="col-lg-12">
                                    <div class="form-inner mb-25">
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
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-label for="terms">
                                        <div class="flex items-center">
                                            <x-checkbox
                                                name="terms"
                                                id="terms"
                                                required
                                            />

                                            <div class="ms-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a
                                                    target="_blank"
                                                    href="'.route('terms.show').'"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                >'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a
                                                    target="_blank"
                                                    href="'.route('policy.show').'"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                >'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-label>
                                </div>
                                @endif

                                <div class="flex items-center justify-end mt-4">
                                    <a
                                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('login') }}"
                                    >
                                        {{ __('Already registered?') }}
                                    </a>


                                </div>

                                {{-- submit button --}}

                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button class="primry-btn-2"
                                            type="submit">Register</button>
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
