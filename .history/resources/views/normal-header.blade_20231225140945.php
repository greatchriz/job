<!-- Main Header-->
<header class="main-header header-shaddow">
    <div class="container-fluid">
        <!-- Main box -->
        <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
                <div class="logo-box">
                    <div class="logo"><a href="/"><img
                                src="/assets/images/header1-logo.svg"
                                height="90px"
                                width="180px"
                                alt=""
                                title=""
                            ></a></div>
                </div>


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
                        :current="request()->routeIs('about-us')"
                        href="{{ route('about-us') }}"
                        title="About Us"
                    />

                    <x-main-pages.nav-link
                        :current="request()->routeIs('job-listing')"
                        href="{{ route('job-listing') }}"
                        title="Jobs"
                    />

                    <x-main-pages.mega-menu-nav
                        class="dropdown has-mega-menu" id="has-mega-menu"
                        :current="request()->routeIs('work-visa')"
                        navTitle="Work Visa"
                    />

                   @include('mega-menu-nav', ['navTitle' => 'EU Work Visa'])


                    <x-main-pages.nav-link
                        :current="request()->routeIs('services')"
                        href="{{ route('services') }}"
                        title="Services"
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

                    {{-- <x-main-pages.nav-link
                        :current="request()->routeIs('blog')"
                        href="{{ route('blog') }}"
                        title="Blog"
                    /> --}}



                    <x-main-pages.nav-link
                        :current="request()->routeIs('contact-us')"
                        href="{{ route('contact-us') }}"
                        title="Contact Us"
                    />


                    <!-- Only for Mobile View -->
                    <li class="mm-add-listing">
                        @auth
                        @if(auth()->user()->hasRole('admin'))
                            <a href="{{ route('admin.dashboard') }}" class="theme-btn btn-style-one">Admin Dashboard</a>
                        @else
                            <a href="{{ route('dashboard') }}" class="theme-btn btn-style-one">Dashboard</a>
                        @endif
                        @else
                            <a href="{{ route('login') }}" class="theme-btn btn-style-one" style="margin-bottom: 10px">Login</a>

                            <a href="{{ route('register') }}" class="theme-btn btn-style-one">Register</a>

                        @endauth
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
                <!-- Main Menu End-->
            </div>

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="btn-box">
                    @auth
                        <a
                            href="/dashboard"
                            class="theme-btn btn-style-one"
                        ><span class="btn-title">Dashboard</span></a>
                    @else
                        <a
                            href="/login"
                            class="theme-btn btn-style-three"
                        >Login</a>
                        <a
                            href="/register"
                            class="theme-btn btn-style-one"
                        ><span class="btn-title">Register</span></a>
                    @endauth

                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="/"><img
                    src="assets/images/header1-logo.svg"
                    height="90px"
                    width="180px"
                    alt=""
                    title=""
                ></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

            <div class="outer-box">
                <!-- Login/Register -->
                <div class="login-box">
                    <a
                        href="login-popup.html"
                        class="call-modal"
                    ><span class="icon-user"></span></a>
                </div>

                <a
                    href="#nav-mobile"
                    class="mobile-nav-toggler navbar-trigger"
                ><span class="flaticon-menu-1"></span></a>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <div id="nav-mobile"></div>
</header>
<!--End Main Header -->
