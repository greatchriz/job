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
          <div class="sec-title text-center">
            <h2>Polticventure Terms of Service</h2>
            <div class="text">Effective Date: December 11, 2023</div>
            <p>
                These Terms of Service ("Terms") govern your access to and use of the Polticventure website and services ("Services"). By accessing or using the Services, you agree to be bound by these Terms. If you do not agree to all of the terms and conditions of these Terms, then you may not access or use the Services.
            </p>
          </div>
          <x-main-pages.terms.term
            title="Definitions"
            text="Polticventure: Polticventure B.V., a company incorporated under the laws of the Netherlands."
            text2="Services: The website and all services provided by Polticventure, including the job board, visa application assistance, travel and accommodation booking, and other relocation support services."
            text3="Personal Information: Any information that can be used to identify you, such as your name, email address, phone number, or any other information that can be used to contact you."
          />

          <x-main-pages.terms.term
            title="Definitions"
            text="Polticventure: Polticventure B.V., a company incorporated under the laws of the Netherlands."
            text2="Services: The website and all services provided by Polticventure, including the job board, visa application assistance, travel and accommodation booking, and other relocation support services."
            text3="Personal Information: Any information that can be used to identify you, such as your name, email address, phone number, or any other information that can be used to contact you."
          />

          <x-main-pages.terms.term
            title="Definitions"
            text="Polticventure: Polticventure B.V., a company incorporated under the laws of the Netherlands."
            text2="Services: The website and all services provided by Polticventure, including the job board, visa application assistance, travel and accommodation booking, and other relocation support services."
            text3="Personal Information: Any information that can be used to identify you, such as your name, email address, phone number, or any other information that can be used to contact you."
          />

          <x-main-pages.terms.term
            title="Definitions"
            text="Polticventure: Polticventure B.V., a company incorporated under the laws of the Netherlands."
            text2="Services: The website and all services provided by Polticventure, including the job board, visa application assistance, travel and accommodation booking, and other relocation support services."
            text3="Personal Information: Any information that can be used to identify you, such as your name, email address, phone number, or any other information that can be used to contact you."
          />

        </div>

    </section>




</x-main-pages.layout>
