<!DOCTYPE html>
<html lang="en">

@php
    $pagesmeta = [
        [
            'url' => route('home'),
            'title' => 'Nexustravel: Your Gateway to Opportunity and Mobility',
            'description' => 'Find your dream job abroad, navigate Visa and Residency applications, and plan your relocation with Nexustravel\'s comprehensive suite of services.',
            'keywords' => 'job board, overseas jobs, Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals, Nexustravel',
            'ogImage' => 'https://nexus-travel.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('about-us'),
            'title' => 'Nexustravel: Who We Are and What We Do.',
            'description' => 'Discover Nexustravel\'s mission, values, and team. Learn how we help individuals and businesses thrive in the international job market.',
            'keywords' => 'Nexustravel, mission statement, values, team, global mobility, job seekers, employers, relocation assistance',
            'ogImage' => 'https://nexus-travel.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('contact-us'),
            'title' => 'Get in Touch with Nexustravel: We\'re Here to Help.',
            'description' => 'Have questions or need assistance? Reach out to our friendly team for personalized support.',
            'keywords' => 'contact Nexustravel, customer support, inquiries, relocation advice, job search help',
            'ogImage' => 'https://nexus-travel.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('blog'),
            'title' => 'Nexustravel Blog: Insights for Your Global Career.',
            'description' => 'Dive into expert tips, industry trends, and inspiring stories to navigate the international job market and relocation process successfully.',
            'keywords' => 'Nexustravel blog, career advice, relocation tips, international job market, expat life',
            'ogImage' => 'https://nexus-travel.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('job-listing'),
            'title' => 'Nexustravel: Find Your Dream Job Abroad.',
            'description' => 'Browse thousands of exciting job opportunities worldwide. Start your journey to a fulfilling career abroad today!',
            'keywords' => 'international jobs, job search, overseas careers, Nexustravel job board, career opportunities',
            'ogImage' => 'https://nexus-travel.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('services'),
            'title' => 'Nexustravel: Our Services: Your Global Mobility Partner.',
            'description' => 'Simplify your relocation with our comprehensive services, including Visa applications, Residency permits, flights, accommodation, and more.',
            'keywords' => 'Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals, Nexustravel services',
            'ogImage' => 'https://nexus-travel.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('terms'),
            'title' => 'Nexustravel: Terms of Service: Read Before Using Our Platform.',
            'description' => 'Ensure a smooth and compliant experience by understanding our terms of service.',
            'keywords' => 'terms of service, user agreement, legal terms, Nexustravel terms, privacy policy',
            'ogImage' => 'https://nexus-travel.agency/images/index-13/header/test.png',
        ],

        [
            'url' => route('privacy-policy'),
            'title' => 'Your Data is Secure: Nexustravel Privacy Policy.',
            'description' => 'Learn how Nexustravel protects your personal information and respects your privacy.',
            'keywords' => 'privacy policy, data protection, privacy, user data, Nexustravel privacy',
            'ogImage' => 'https://nexus-travel.agency/images/index-13/header/test.png',
        ]

    ];

    // $page is the array above where the url matches the current url
    $page = $pagesmeta[array_search(url()->current(), array_column($pagesmeta, 'url'))];

    // if $page is empty, set it to the first page
    if (empty($page)) {
        $page = $pagesmeta[0];
    }

@endphp



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page['title'] }}</title>
    <meta name="description" content="{{ $page['description'] }}">
    <meta name="keywords" content="{{ $page['keywords'] }}">

    <meta property="og:title" content="{{ $page['title'] }}">
    <meta property="og:description" content="{{ $page['description'] }}">
    <meta property="og:image" content="{{ $page['ogImage'] }}">
    <meta property="og:url" content="{{ $page['url'] }}">
    <meta property="og:type" content="website">

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


    <body data-anm=".anm">

        <div class="page-wrapper">

            <div class="auto-container">
                <div class="row">
                    <div id="google_translate_element"></div>
                </div>
            </div>
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
                                    <div class="logo"><a href="/"><img
                                        src="/assets/images/default-monochrome.svg"
                                        width="180px"
                                        height="90px"
                                        alt=""
                                    ></a></div>


                                    <p class="address">2001,Strawinskylaan Amsterdam, <br> North Holland, Netherlands.
                                        <br><a
                                            href="mailto:support@nexus-travel.agency"
                                            class="email"
                                        >support@nexus-travel.agency</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Bottom-->
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="outer-box">
                            <div class="copyright-text">© 2023 <a href="nexus-travel.agency">Nexustravel</a>. All Right Reserved.</div>
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
        <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
            }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script src="//code.tidio.co/vgcpcecgqwp1vgdulupaqtj8hhcheo9g.js" async></script>


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
