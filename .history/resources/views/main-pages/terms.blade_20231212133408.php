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

                $terms_and_conditions = [
                    "introduction" => [
                        "title" => "Introduction",
                        "content" => "These Terms and Conditions govern your use of [Company Name]'s website and services..."
                    ],
                    "definitions" => [
                        "title" => "Definitions",
                        "items" => [
                        "Account" => "Your account on the website...",
                        "Content" => "Any information, data...",
                        "Services" => "The job search and visa application...",
                        "User" => "Any individual or entity...",
                        "Website" => "The website operated by the Company at [website address]..."
                        ]
                    ],
                    "use_of_website_and_services" => [
                        "title" => "Use of the Website and Services",
                        "subheadings" => [
                        "eligibility" => [
                            "content" => "You must be at least 18 years old..."
                        ],
                        "prohibited_activities" => [
                            "content" => "You agree not to:",
                            "list" => [
                            "Violate any applicable laws...",
                            "Infringe the intellectual property rights...",
                            ]
                        ],
                        "account_registration" => [
                            "content" => "You may need to create an account..."
                        ]
                        ]
                    ],
                    "job_search_services" => [
                        "title" => "Job Search Services",
                        "subheadings" => [
                        "job_listings" => [
                            "content" => "The Company provides access to..."
                        ],
                        "job_applications" => [
                            "content" => "You may submit job applications..."
                        ],
                        "fees" => [
                            "content" => "The Company may charge fees..."
                        ]
                        ]
                    ],
                    "visa_application_services" => [
                        "title" => "Visa Application Services",
                        "subheadings" => [
                        "visa_information" => [
                            "content" => "The Company provides information about..."
                        ],
                        "visa_assistance" => [
                            "content" => "The Company may offer visa application..."
                            "list" => [
                            "Reviewing your visa application materials...",
                            "Providing guidance on completing the visa application form...",
                            ]
                        ],
                        "visa_approval" => [
                            "content" => "The Company does not guarantee..."
                        ]
                        ]
                    ],
                    "disclaimer_of_warranties" => [
                        "title" => "Disclaimer of Warranties",
                        "content" => "THE WEBSITE AND SERVICES ARE PROVIDED 'AS IS' WITHOUT WARRANTY..."
                    ],
                    "limitation_of_liability" => [
                        "title" => "Limitation of Liability",
                        "content" => "THE COMPANY SHALL NOT BE LIABLE FOR ANY DAMAGES..."
                    ],
                    "indemnification" => [
                        "title" => "Indemnification",
                        "content" => "You agree to indemnify and hold harmless..."
                    ],
                    "intellectual_property" => [
                        "title" => "Intellectual Property",
                        "content" => "The website and all content on the website..."
                    ],
                    "termination" => [
                        "title" => "Termination",
                        "content" => "The Company may terminate your access..."
                    ]
                ];

            @endphp


          <div class="sec-title text-center" style="margin-top: 50px">
            <h2>Polticventure Terms of Service</h2>
            <div class="text">Effective Date: {{ $terms['effective_date'] }}</div>
            <p style="font-weight: 700">
                {{ $terms['introduction']['content'] }}
            </p>
          </div>

            <!-- using the $terms array from above to display the terms -->

            @foreach ($terms as $key => $value)
                <x-main-pages.terms.term :terms="$terms" />
            @endforeach



        </div>

    </section>




</x-main-pages.layout>
