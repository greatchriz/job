<!DOCTYPE html>
<html lang="en">

@php
    $pagesmeta = [
        [
            'url' => route('home'),
            'title' => 'Polticventure: Your Gateway to Opportunity and Mobility',
            'description' => 'Find your dream job abroad, navigate Visa and Residency applications, and plan your relocation with Polticventure\'s comprehensive suite of services.',
            'keywords' => 'job board, overseas jobs, Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals, Polticventure',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
            'url' => route('about-us'),
            'title' => 'Polticventure: Who We Are and What We Do.',
            'description' => 'Discover Polticventure\'s mission, values, and team. Learn how we help individuals and businesses thrive in the international job market.',
            'keywords' => 'Polticventure, mission statement, values, team, global mobility, job seekers, employers, relocation assistance',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
            'url' => route('contact-us'),
            'title' => 'Get in Touch with Polticventure: We\'re Here to Help.',
            'description' => 'Have questions or need assistance? Reach out to our friendly team for personalized support.',
            'keywords' => 'contact Polticventure, customer support, inquiries, relocation advice, job search help',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
            'url' => route('blog'),
            'title' => 'Polticventure Blog: Insights for Your Global Career.',
            'description' => 'Dive into expert tips, industry trends, and inspiring stories to navigate the international job market and relocation process successfully.',
            'keywords' => 'Polticventure blog, career advice, relocation tips, international job market, expat life',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
            'url' => route('job-listing'),
            'title' => 'Polticventure: Find Your Dream Job Abroad.',
            'description' => 'Browse thousands of exciting job opportunities worldwide. Start your journey to a fulfilling career abroad today!',
            'keywords' => 'international jobs, job search, overseas careers, Polticventure job board, career opportunities',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
            'url' => route('services'),
            'title' => 'Polticventure: Our Services: Your Global Mobility Partner.',
            'description' => 'Simplify your relocation with our comprehensive services, including Visa applications, Residency permits, flights, accommodation, and more.',
            'keywords' => 'Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals, Polticventure services',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
            'url' => route('terms'),
            'title' => 'Polticventure: Terms of Service: Read Before Using Our Platform.',
            'description' => 'Ensure a smooth and compliant experience by understanding our terms of service.',
            'keywords' => 'terms of service, user agreement, legal terms, Polticventure terms, privacy policy',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
            'url' => route('privacy'),
            'title' => 'Your Data is Secure: Polticventure Privacy Policy.',
            'description' => 'Learn how Polticventure protects your personal information and respects your privacy.',
            'keywords' => 'privacy policy, data protection, privacy, user data, Polticventure privacy',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ]

    ];

    // $page is the array above where the url matches the current url
    $page = $pagesmeta[array_search(url()->current(), array_column($pagesmeta, 'url'))];

    dd($page);
@endphp



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polticventure: Your Gateway to Opportunity and Mobility</title>
    <meta name="description" content="Find your dream job abroad, navigate Visa and Residency applications, and plan your relocation with Polticventure's comprehensive suite of services.">
    <meta name="keywords" content="job board, overseas jobs, Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals, Polticventure">

    <meta property="og:title" content="Polticventure: Your Gateway to Opportunity and Mobility">
    <meta property="og:description" content="Find your dream job abroad, navigate Visa and Residency applications, and plan your relocation with Polticventure's comprehensive suite of services.">
    <meta property="og:image" content="https://www.pinterest.com/pin/technology-solution-company-proven-process-diagram-illustration-or-graphics-contest-sponsored-winning--609252655824295098/">
    <meta property="og:url" content="https://e-polinvest.pl/en/home/">
    <meta property="og:type" content="website">

    <meta name="twitter:title" content="Polticventure: Your Gateway to Opportunity and Mobility">
    <meta name="twitter:description" content="Find your dream job abroad, navigate Visa and Residency applications, and plan your relocation with Polticventure's comprehensive suite of services.">
    <meta name="twitter:image" content="https://www.pinterest.com/pin/technology-solution-company-proven-process-diagram-illustration-or-graphics-contest-sponsored-winning--609252655824295098/">
    <meta name="twitter:card" content="summary_large_image">

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
</head>

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
            {{ $mainHeader }}


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
                                                src="/assets/images/header1-logo.svg"
                                                width="180px"
                                                height="90px"
                                                alt=""
                                            ></a></div>
                                    <p class="phone-num"><span>Call us </span><a href="thebeehost%40support.html">123
                                            456 7890</a></p>
                                    <p class="address">2001,Strawinskylaan Amsterdam, <br> North Holland, Netherlands.
                                        <br><a
                                            href="mailto:support@polticventure.co"
                                            class="email"
                                        >support@polticventure.co</a></p>
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
