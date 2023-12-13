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
                [
                    "name" => "introduction",
                    "title" => "Introduction",
                    "content" => "These Terms and Conditions (\"Terms\") govern your use of the website and services offered by <b>POLTICVENTURE</b> (\"Company\", \"we\", \"us\", or \"our\"). By accessing or using the website or any of the services, you agree to be bound by these Terms. If you do not agree to all of the Terms, you may not use the website or any of the services."
                ],

                [
                    "name" => "definitions",
                    "title" => "Definitions",
                    "content" => "
                        <ul class=\"list-style-four\">
                            <li><b>Account: </b> Your account on the website where you can access and manage your profile, job applications, and visa application information.</li>
                            <li><b>Content</b> Any information, data, text, images, videos, audio files, or other materials displayed on the website.</li>
                            <li><b>Content</b> Any information, data, text, images, videos, audio files, or other materials displayed on the website.</li>
                            <li><b>Content</b> Any information, data, text, images, videos, audio files, or other materials displayed on the website.</li>
                            <li><b>Content</b> Any information, data, text, images, videos, audio files, or other materials displayed on the website.</li>
                        </ul>
                    "
                ],

                [
                    "name" => "use_of_website_and_services",
                    "title" => "Use of the Website and Services",
                    "sub_content" => [
                        [
                            "title" => "Eligibility",
                            "content" => "You must be at least 18 years old and have the legal capacity to enter into contracts to use the website and services."
                        ],
                        [
                            "title" => "Prohibited Activities",
                            "content" => "
                                <h4> You agree not to:</h4><br>
                                <ul class=\"list-style-four\">
                                <li>Violate any applicable laws or regulations.</li>
                                <li>Infringe the intellectual property rights of any third party.</li>
                                <li>Use the website or services for any illegal or unauthorized purpose.</li>
                                <li>Attempt to gain unauthorized access to the website or any of the services.<li>
                                <li>Transmit any viruses, worms, Trojan horses, or other harmful code.<li>
                                <li>Interfere with or disrupt the website or any of the services.<li>
                                <li>Use the website or services in a way that could damage, disable, or overburden the website or any of the services.<li></li>Collect or store personal information about other users without their consent.
                                * Impersonate any person or entity.</li>
                                </ul>"
                        ],
                        [
                            "title" => "Account Registration",
                            "content" => "You may need to create an account to access and use certain features of the website and services. You agree to provide accurate, complete, and current information when creating your account and to update your information as necessary."
                        ]
                    ]
                ],
                [
                    "name" => "job_search_services",
                    "title" => "Job Search Services",
                    "sub_content" => [
                        [
                            "title" => "Job Listings",
                            "content" => "<b>POLTICVENTURE</b> provides access to a database of job listings from various sources. <b>POLTICVENTURE</b> does not guarantee the accuracy or completeness of the job listings."
                        ],
                        [
                            "title" => "Job Applications",
                            "content" => "You may submit job applications through the website. <b>POLTICVENTURE</b> does not guarantee that your job applications will be received or considered by potential employers."
                        ],
                        [
                            "title" => "Fees",
                            "content" => "<b>POLTICVENTURE</b> may charge fees for certain job search services. The fees will be clearly displayed on the website."
                        ]
                    ]
                ],
                [
                    "name" => "visa_application_services",
                    "title" => "Visa Application Services",
                    "sub_content" => [
                        [
                            "title" => "Visa Information",
                            "content" => "<b>POLTICVENTURE</b> provides information about visa requirements and application processes for various countries. <b>POLTICVENTURE</b> does not guarantee the accuracy or completeness of the visa information."
                        ],
                        [
                            "title" => "Visa Assistance",
                            "content" => "<b>POLTICVENTURE</b> may offer visa application assistance services for a fee. The services may include:
                                * Reviewing your visa application materials.
                                * Providing guidance on completing the visa application form.
                                * Assisting with document translation and legalization.
                                * Communicating with immigration authorities on your behalf."
                        ],
                        [
                            "title" => "Visa Approval",
                            "content" => "<b>POLTICVENTURE</b> does not guarantee that your visa application will be approved. The decision to grant or deny a visa is solely at the discretion of the immigration authorities."
                        ]
                    ]
                ],

                [
                "name" => "use_of_website_and_services",
                "title" => "Use of the Website and Services",
                "sub_content" => [
                        [
                            "title" => "Eligibility",
                            "content" => "You must be at least 18 years old and have the legal capacity to enter into contracts to use the website and services."
                        ],
                        [
                            "title" => "Prohibited Activities",
                            "content" => "You agree not to:
                                * Violate any applicable laws or regulations.
                                * Infringe the intellectual property rights of any third party.
                                * Use the website or services for any illegal or unauthorized purpose.
                                * Attempt to gain unauthorized access to the website or any of the services.
                                * Transmit any viruses, worms, Trojan horses, or other harmful code.
                                * Interfere with or disrupt the website or any of the services.
                                * Use the website or services in a way that could damage, disable, or overburden the website or any of the services.
                                * Collect or store personal information about other users without their consent.
                                * Impersonate any person or entity."
                        ],
                        [
                            "title" => "Account Registration",
                            "content" => "You may need to create an account to access and use certain features of the website and services. You agree to provide accurate, complete, and current information when creating your account and to update your information as necessary."
                        ]
                    ]
                ],
                [
                    "name" => "job_search_services",
                    "title" => "Job Search Services",
                    "sub_content" => [
                        [
                            "title" => "Job Listings",
                            "content" => "The Company provides access to a database of job listings from various sources. The Company does not guarantee the accuracy or completeness of the job listings."
                        ],
                        [
                            "title" => "Job Applications",
                            "content" => "You may submit job applications through the website. The Company does not guarantee that your job applications will be received or considered by potential employers."
                        ],
                        [
                            "title" => "Fees",
                            "content" => "The Company may charge fees for certain job search services. The fees will be clearly displayed on the website."
                        ]
                    ]
                ],
                [
                    "name" => "visa_application_services",
                    "title" => "Visa Application Services",
                    "sub_content" => [
                        [
                            "title" => "Visa Information",
                            "content" => "The Company provides information about visa requirements and application processes for various countries. The Company does not guarantee the accuracy or completeness of the visa information."
                        ],
                        [
                            "title" => "Visa Assistance",
                            "content" => "The Company may offer visa application assistance services for a fee. The services may include:
                                * Reviewing your visa application materials.
                                * Providing guidance on completing the visa application form.
                                * Assisting with document translation and legalization.
                                * Communicating with immigration authorities on your behalf."
                        ],
                        [
                            "title" => "Visa Approval",
                            "content" => "The Company does not guarantee that your visa application will be approved. The decision to grant or deny a visa is solely at the discretion of the immigration authorities."

                        ],
                    ]
                ],
            ];
        @endphp




          <div class="sec-title text-center" style="margin-top: 50px">
            <h2>Polticventure Terms of Service</h2>
            <div class="text">Effective Date: January 1, 2023</div>
            <p style="font-weight: 700">
                {{ $terms_and_conditions['0']['content'] }}
            </p>
          </div>

            <!-- using the $terms array from above to display the terms -->






                @foreach ($terms_and_conditions as $terms_and_condition)

                    <x-main-pages.terms.term :terms_and_condition="$terms_and_condition">


                        @isset($terms_and_condition['content'])

                            <p>
                                {!! $terms_and_condition['content'] !!}
                            </p>
                        @endisset

                        @isset($terms_and_condition['sub_content'])
                            @foreach ($terms_and_condition['sub_content'] as $subcontent)

                            <h4 style="margin-top: 25px">{{ $subcontent['title'] }}</h4>




                                <p>
                                    {!! $subcontent['content'] !!}
                                </p>
                            @endforeach

                        @endisset


                    </x-main-pages.terms.term>


                @endforeach




        </div>

    </section>
</x-main-pages.layout>
