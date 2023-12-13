<x-main-pages.layout>

    @slot('mainHeader')
        <x-main-pages.normal-header >

            @slot('logo')
                <div class="logo-box">
                    <div class="logo"><a href="/"><img
                                src="/assets/images/header1-logo.svg"
                                height="90px"
                                width="180px"
                                alt=""
                                title=""
                            ></a></div>
                </div>
            @endslot

            <nav class="nav main-menu">
                <ul
                    class="navigation"
                    id="navbar"
                >

                    {{--Home
                        Terms & Conditions
                        Privacy Policy
                        Blog
                        Contact Us --}}

                    <x-main-pages.nav-link
                        :current="request()->routeIs('home')"
                        href="{{ route('home') }}"
                        title="Home"
                    />

                    <x-main-pages.nav-link
                        :current="request()->routeIs('terms')"
                        href="{{ route('terms') }}"
                        title="Terms & Conditions"
                    />

                    <x-main-pages.nav-link
                        :current="request()->routeIs('privacy-policy')"
                        href="{{ route('privacy-policy') }}"
                        title="Privacy Policy"
                    />

                    <x-main-pages.nav-link
                        :current="request()->routeIs('blog')"
                        href="{{ route('blog') }}"
                        title="Blog"
                    />

                    <x-main-pages.nav-link
                        :current="request()->routeIs('contact-us')"
                        href="{{ route('contact-us') }}"
                        title="Contact Us"
                    />
                    <!-- Only for Mobile View -->
                    <li class="mm-add-listing">
                        <a
                            href="add-listing.html"
                            class="theme-btn btn-style-one"
                        >Job Post</a>
                        <span>
                            <span class="contact-info">
                                <span class="phone-num"><span>Call us</span><a href="tel:1234567890">123 456
                                        7890</a></span>
                                <span class="address">329 Queensberry Street, North Melbourne VIC <br>3051,
                                    Australia.</span>
                                <a
                                    href="mailto:support@superio.com"
                                    class="email"
                                >support@superio.com</a>
                            </span>
                            <span class="social-links">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-linkedin-in"></span></a>
                            </span>
                        </span>
                    </li>
                </ul>
            </nav>
        </x-main-pages.normal-header>
    @endslot

    <!-- TNC Section -->
    <section class="tnc-section">
        <div class="auto-container">

            @php
                $terms = [
                    'effective_date' => 'December 12, 2023',
                    'eligibility' => [
                        'age' => 18,
                        'legal_capacity' => true,
                    ],
                    'use' => [
                        'lawful_purposes' => true,
                        'prohibited_uses' => [
                            'illegal',
                            'harmful',
                            'offensive',
                        ],
                    ],
                    'job_board' => [
                        'search' => true,
                        'applications' => [
                            'method' => 'form',
                            'data' => ['details', 'cv'],
                            'forwarding' => true,
                            'feedback' => [
                                'source' => 'company',
                                'delivery' => 'Polticventure',
                                'includes' => ['approval/rejection', 'interview requests'],
                            ],
                        ],
                    ],
                    'visa_residence_permit' => [
                        'assistance' => true,
                        'services' => ['form completion', 'document preparation', 'application submission'],
                        'disclaimer' => 'approval not guaranteed',
                    ],
                    'travel_accommodation' => [
                        'booking' => true,
                        'options' => ['flights', 'hotels', 'apartments', 'car rentals'],
                        'responsibility' => 'user pays and books',
                    ],
                    'fees' => [
                        'existence' => true,
                        'display' => 'before service use',
                        'payment' => 'secure online methods',
                        'modification' => 'possible at any time',
                    ],
                    'content' => [
                        'ownership' => 'user retains',
                        'license' => [
                            'type' => 'non-exclusive',
                            'rights' => ['use', 'reproduce', 'modify', 'distribute'],
                            'purpose' => 'providing services',
                        ],
                        'responsibility' => 'no infringement on others intellectual property',
                    ],
                    'user_conduct' => [
                        'integrity' => true,
                        'respectful_responsible' => true,
                        'termination' => 'possible at any time, for any reason, without notice',
                    ],
                    'disclaimers' => [
                        'services' => 'as is and as available',
                        'warranties' => 'none, express or implied',
                        'limitations' => ['uninterrupted', 'error-free', 'secure'],
                        'responsibility' => 'none for user loss or damage',
                    ],
                    'liability' => [
                        'limitation' => 'amount paid for services',
                        'exclusions' => ['indirect, incidental, consequential, punitive damages'],
                    ],
                    'indemnification' => 'user protects Polticventure from claims related to service use',
                    'governing_law' => 'Netherlands',
                    'dispute_resolution' => 'binding arbitration in Amsterdam, Netherlands',
                    'contact' => 'legal@polticventure.com',
                ];

            @endphp


          <div class="sec-title text-center" style="margin-top: 50px">
            <h2>Polticventure Terms of Service</h2>
            <div class="text">Effective Date: {{ $terms['effective_date'] }}</div>
            <p style="font-weight: 700">
                These Terms of Service ("Terms") govern your access to and use of the Polticventure website and services ("Services"). By accessing or using the Services, you agree to be bound by these Terms. If you do not agree to all of the terms and conditions of these Terms, then you may not access or use the Services.
            </p>
          </div>

            <!-- using the $terms array from above to display the terms -->

            @foreach ($terms as $key => $value)
                <x-main-pages.terms.term :terms="$terms" />
            @endforeach



        </div>

    </section>




</x-main-pages.layout>
