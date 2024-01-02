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

                    <li class="current dropdown has-mega-menu" id="has-mega-menu">
                        <span>UK Work Visa</span>
                        <div class="mega-menu">
                          <div class="mega-menu-bar row">
                            <div class="column col-lg-3 col-md-3 col-sm-12">
                              <h3>Jobs Listing</h3>
                              <ul>
                                <li><a href="job-list-v1.html">Jobs List – v1</a></li>
                                <li><a href="job-list-v2.html">Jobs List – v2</a></li>
                                <li><a href="job-list-v3.html">Jobs List – v3</a></li>
                                <li><a href="job-list-v4.html">Jobs List – v4</a></li>
                                <li><a href="job-list-v5.html">Jobs List – v5</a></li>
                              </ul>
                            </div>

                            <div class="column col-lg-3 col-md-3 col-sm-12">
                              <ul>
                                <li><a href="job-list-v6.html">Jobs List – v6</a></li>
                                <li><a href="job-list-v7.html">Jobs List – v7</a></li>
                                <li><a href="job-list-v8.html">Jobs List – v8</a></li>
                                <li><a href="job-list-v9.html">Jobs List – v9</a></li>
                                <li><a href="job-list-v10.html">Jobs List – v10</a></li>
                              </ul>
                            </div>

                            <div class="column col-lg-3 col-md-3 col-sm-12">
                              <ul>
                                <li><a href="job-list-v11.html">Jobs List – v11</a></li>
                                <li><a href="job-list-v12.html">Jobs List – v12</a></li>
                                <li><a href="job-list-v13.html">Jobs List – v13</a></li>
                                <li><a href="job-list-v14.html">Jobs List – v14</a></li>
                              </ul>
                            </div>

                            <div class="column col-lg-3 col-md-3 col-sm-12">
                              <h3>Jobs Single</h3>
                              <ul>
                                <li><a href="job-single.html">Job Single v1</a></li>
                                <li><a href="job-single-2.html">Job Single v2</a></li>
                                <li><a href="job-single-3.html">Job Single v3</a></li>
                                <li><a href="job-single-4.html">Job Single v4</a></li>
                                <li><a href="job-single-5.html">Job Single v5</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>

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
