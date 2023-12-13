<!-- Main Header-->
<!-- create an attribues merge for the class-->

<header $attributes->merge(['class' => 'main-header'])>
    <!-- Main box -->
    <div class="main-box">
        <!--Nav Outer -->
        <div class="nav-outer">
            <div class="logo-box">
                <div class="logo"><a href="index.html"><img
                            src="/images/logo-2.svg"
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
            <!-- Main Menu End-->
        </div>

        <div class="outer-box">
            <!-- Login/Register -->
            <div class="btn-box">
                <a
                    href="login-popup.html"
                    class="theme-btn btn-style-three btn-white-10 call-modal"
                >Login / Register</a>
                <a
                    href="dashboard-post-job.html"
                    class="theme-btn btn-style-one btn-white"
                ><span class="btn-title">Job Post</span></a>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="logo"><a href="index.html"><img
                    src="/images/logo.svg"
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
