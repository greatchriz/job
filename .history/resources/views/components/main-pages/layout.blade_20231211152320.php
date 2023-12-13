<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from creativelayers.net/themes/superio/index-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:01 GMT -->

    <head>
        <meta charset="utf-8">
        <title>Superio | Just another HTML Template | Home Page 11</title>

        <!-- Stylesheets -->
        <link
            href="/css/bootstrap.css"
            rel="stylesheet"
        >
        <link
            href="/css/style.css"
            rel="stylesheet"
        >
        <link
            href="/css/responsive.css"
            rel="stylesheet"
        >

        <link
            rel="shortcut icon"
            href="/images/favicon.png"
            type="image/x-icon"
        >
        <link
            rel="icon"
            href="/images/favicon.png"
            type="image/x-icon"
        >

        <!-- Responsive -->
        <meta
            http-equiv="X-UA-Compatible"
            content="IE=edge"
        >
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
        >
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
    </head>

    <body data-anm=".anm">

        <div class="page-wrapper">

            <!-- Preloader -->
            <div class="preloader"></div>

            <!-- Main Header-->
            <header class="main-header -type-11">
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
                                    :current="request()->routeIs('privacy')"
                                    href="{{ route('privacy') }}"
                                    title="Privacy Policy"
                                />

                                <x-main-pages.nav-link
                                    :current="request()->routeIs('blog')"
                                    href="{{ route('blog') }}"
                                    title="Blog"
                                />

                                <x-main-pages.nav-link
                                    :current="request()->routeIs('contact')"
                                    href="{{ route('contact') }}"
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

            {{ $slot }}

            <!-- Main Footer -->
            <footer class="main-footer -type-13 alternate3">
                <div class="auto-container">
                    <!--Widgets Section-->
                    <div class="widgets-section">
                        <div class="row">
                            <div class="big-column col-xl-4 col-lg-3 col-md-12">
                                <div class="footer-column about-widget">
                                    <div class="logo"><a href="#"><img
                                                src="/images/logo.svg"
                                                alt=""
                                            ></a></div>
                                    <p class="phone-num"><span>Call us </span><a href="thebeehost%40support.html">123
                                            456 7890</a></p>
                                    <p class="address">329 Queensberry Street, North Melbourne VIC<br> 3051, Australia.
                                        <br><a
                                            href="mailto:support@superio.com"
                                            class="email"
                                        >support@superio.com</a></p>
                                </div>
                            </div>

                            <div class="big-column col-xl-8 col-lg-9 col-md-12">
                                <div class="row">
                                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h4 class="widget-title">For Candidates</h4>
                                            <div class="widget-content">
                                                <ul class="list">
                                                    <li><a href="#">Browse Jobs</a></li>
                                                    <li><a href="#">Browse Categories</a></li>
                                                    <li><a href="#">Candidate Dashboard</a></li>
                                                    <li><a href="#">Job Alerts</a></li>
                                                    <li><a href="#">My Bookmarks</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h4 class="widget-title">For Employers</h4>
                                            <div class="widget-content">
                                                <ul class="list">
                                                    <li><a href="#">Browse Candidates</a></li>
                                                    <li><a href="#">Employer Dashboard</a></li>
                                                    <li><a href="#">Add Job</a></li>
                                                    <li><a href="#">Job Packages</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h4 class="widget-title">About Us</h4>
                                            <div class="widget-content">
                                                <ul class="list">
                                                    <li><a href="#">Job Page</a></li>
                                                    <li><a href="#">Job Page Alternative</a></li>
                                                    <li><a href="#">Resume Page</a></li>
                                                    <li><a href="#">Blog</a></li>
                                                    <li><a href="#">Contact</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                                        <div class="footer-widget links-widget">
                                            <h4 class="widget-title">Helpful Resources</h4>
                                            <div class="widget-content">
                                                <ul class="list">
                                                    <li><a href="#">Site Map</a></li>
                                                    <li><a href="#">Terms of Use</a></li>
                                                    <li><a href="#">Privacy Center</a></li>
                                                    <li><a href="#">Security Center</a></li>
                                                    <li><a href="#">Accessibility Center</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Bottom-->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="outer-box">
                            <div class="copyright-text">© 2021 <a href="#">Superio</a>. All Right Reserved.</div>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scroll To Top -->
                <div
                    class="scroll-to-top scroll-to-target"
                    data-target="html"
                ><span class="fa fa-angle-up"></span></div>
            </footer>
            <!-- End Main Footer -->


        </div><!-- End Page Wrapper -->


        <script src="/js/jquery.js"></script>
        <script src="/js/popper.min.js"></script>
        <script src="/js/chosen.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.fancybox.js"></script>
        <script src="/js/jquery.modal.min.js"></script>
        <script src="/js/mmenu.polyfills.js"></script>
        <script src="/js/mmenu.js"></script>
        <script src="/js/appear.js"></script>
        <script src="/js/anm.min.js"></script>
        <script src="/js/ScrollMagic.min.js"></script>
        <script src="/js/rellax.min.js"></script>
        <script src="/js/owl.js"></script>
        <script src="/js/wow.js"></script>
        <script src="/js/script.js"></script>

    </body>


    <!-- Mirrored from creativelayers.net/themes/superio/index-13.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:04 GMT -->

</html>
