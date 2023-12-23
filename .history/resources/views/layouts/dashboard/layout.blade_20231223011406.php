<!DOCTYPE html>
<html lang="en">

{{--
About Us:

Meta Title: Polticventure: Who We Are and What We Do | Empowering Your Global Journey
Meta Description: Discover Polticventure's mission, values, and team. Learn how we help individuals and businesses thrive in the international job market.
Meta Keywords: Polticventure, about us, mission statement, values, team, global mobility, job seekers, employers, relocation assistance
Recommended Image: A group photo of the Polticventure team, showcasing diversity and professionalism.
Contact Us:

Meta Title: Get in Touch with Polticventure: We're Here to Help
Meta Description: Have questions or need assistance? Reach out to our friendly team for personalized support.
Meta Keywords: contact Polticventure, customer support, inquiries, relocation advice, job search help
Recommended Image: A map with markers indicating Polticventure's global offices or a contact form icon.
Blog:

Meta Title: Polticventure Blog: Insights for Your Global Career | Explore Now
Meta Description: Dive into expert tips, industry trends, and inspiring stories to navigate the international job market and relocation process successfully.
Meta Keywords: Polticventure blog, career advice, relocation tips, international job market, expat life
Recommended Image: A collage of blog post thumbnails with captivating titles and visuals.
Job Listing:

Meta Title: Find Your Dream Job Abroad | Explore Global Opportunities with Polticventure
Meta Description: Browse thousands of exciting job opportunities worldwide. Start your journey to a fulfilling career abroad today!
Meta Keywords: international jobs, job search, overseas careers, Polticventure job board, career opportunities
Recommended Image: A visual depicting a globe with job icons scattered across different continents.
Services:

Meta Title: Your Global Mobility Partner: Polticventure Services
Meta Description: Simplify your relocation with our comprehensive services, including Visa applications, Residency permits, flights, accommodation, and more.
Meta Keywords: Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals, Polticventure services
Recommended Image: A visually appealing graphic illustrating the various services offered by Polticventure, such as icons for passports, flights, and apartments.
Terms:

Meta Title: Polticventure Terms of Service: Read Before Using Our Platform
Meta Description: Ensure a smooth and compliant experience by understanding Polticventure's terms of service.
Meta Keywords: Polticventure terms, terms of service, user agreement, legal terms
Recommended Image: An image representing a contract or legal document.
Privacy Policy:

Privacy Policy: Your Data is Secure: Polticventure Privacy Policy
Meta Description: Learn how Polticventure protects your personal information and respects your privacy.
Meta Keywords: Polticventure privacy policy, data protection, privacy, user data
Recommended Image: An image representing a shield or a lock symbolizing data protection. --}}



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
            'url' => route('privacy-policy'),
            'title' => 'Your Data is Secure: Polticventure Privacy Policy.',
            'description' => 'Learn how Polticventure protects your personal information and respects your privacy.',
            'keywords' => 'privacy policy, data protection, privacy, user data, Polticventure privacy',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ]

        [
            'url' => route('privacy-policy'),
            'title' => 'Your Data is Secure: Polticventure Privacy Policy.',
            'description' => 'Learn how Polticventure protects your personal information and respects your privacy.',
            'keywords' => 'privacy policy, data protection, privacy, user data, Polticventure privacy',
            'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ]

    ];

    $page = $pagesmeta[array_search(url()->current(), array_column($pagesmeta, 'url'))];

@endphp


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:24 GMT -->
<head>
  <meta charset="utf-8">
  <title>{{ $page['title'] }}</title>

  <!-- Stylesheets -->
  <link href="/css/bootstrap.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/responsive.css" rel="stylesheet">

  <link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">
  <link rel="icon" href="/images/favicon.png" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="/js/respond.js"></script><![endif]-->
</head>

<body>

  <div class="page-wrapper dashboard ">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header header-shaddow">
      <div class="container-fluid">
        <!-- Main box -->
        <div class="main-box">
          <!--Nav Outer -->
          <div class="nav-outer">
            <div class="logo-box">
                <x-main-pages.logo />
            </div>

            @include('layouts.main-menu')
            <!-- Main Menu End-->
          </div>

          <div class="outer-box">

            <button class="menu-btn">
              <span class="count">1</span>
              <span class="icon la la-heart-o"></span>
            </button>

            <button class="menu-btn">
              <span class="icon la la-bell"></span>
            </button>

            <!-- Dashboard Option -->
            <div class="dropdown dashboard-option">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                <img src="/images/resource/company-6.png" alt="avatar" class="thumb">
                <span class="name">My Account</span>
              </a>

              @include('layouts.user-dropdown')

            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Header -->
      <div class="mobile-header">
        <x-main-pages.logo />
        <!--Nav Box-->
        <div class="nav-outer clearfix">

          <div class="outer-box">
            <!-- Login/Register -->
            <div class="login-box">
              <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
            </div>

            <button id="toggle-user-sidebar"><img src="/images/resource/company-6.png" alt="avatar" class="thumb"></button>
            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
          </div>
        </div>

      </div>

      <!-- Mobile Nav -->
      <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->

    <!-- Sidebar Backdrop -->
    <div class="sidebar-backdrop"></div>

    <!-- User Sidebar -->
    <div class="user-sidebar">

      <div class="sidebar-inner">
        @include('layouts.sidebar')
      </div>
    </div>
    <!-- End User Sidebar -->

    <!-- Dashboard -->
    <section class="user-dashboard">

    @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block mb-10">
                <strong>{{ $message }}</strong>
            </div>
    @endif


      <div class="dashboard-outer">
        @yield('upper-title')

        @yield('content')


    </div>
</section>
<!-- End Dashboard -->

<!-- Copyright -->
<div class="copyright-text">
  <p>© 2021 Superio. All Right Reserved.</p>
</div>

</div><!-- End Page Wrapper -->


<script src="/js/jquery.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/chosen.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.fancybox.js"></script>
<script src="/js/jquery.modal.min.js"></script>
<script src="/js/mmenu.polyfills.js"></script>
<script src="/js/mmenu.js"></script>
<script src="/js/appear.js"></script>
<script src="/js/ScrollMagic.min.js"></script>
<script src="/js/rellax.min.js"></script>
<script src="/js/owl.js"></script>
<script src="/js/wow.js"></script>
<script src="/js/script.js"></script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="/js/chart.min.js"></script>
<script>
Chart.defaults.global.defaultFontFamily = "Sofia Pro";
Chart.defaults.global.defaultFontColor = '#888';
Chart.defaults.global.defaultFontSize = '14';

var ctx = document.getElementById('chart').getContext('2d');

var chart = new Chart(ctx, {

  type: 'line',
  // The data for our dataset
  data: {
    labels: ["January", "February", "March", "April", "May", "June"],
    // Information about the dataset
    datasets: [{
      label: "Views",
      backgroundColor: 'transparent',
      borderColor: '#1967D2',
      borderWidth: "1",
      data: [196, 132, 215, 362, 210, 252],
      pointRadius: 3,
      pointHoverRadius: 3,
      pointHitRadius: 10,
      pointBackgroundColor: "#1967D2",
      pointHoverBackgroundColor: "#1967D2",
      pointBorderWidth: "2",
    }]
  },

  // Configuration options
  options: {

    layout: {
      padding: 10,
    },

    legend: {
      display: false
    },
    title: {
      display: false
    },

    scales: {
      yAxes: [{
        scaleLabel: {
          display: false
        },
        gridLines: {
          borderDash: [6, 10],
          color: "#d8d8d8",
          lineWidth: 1,
        },
      }],
      xAxes: [{
        scaleLabel: {
          display: false
        },
        gridLines: {
          display: false
        },
      }],
    },

    tooltips: {
      backgroundColor: '#333',
      titleFontSize: 13,
      titleFontColor: '#fff',
      bodyFontColor: '#fff',
      bodyFontSize: 13,
      displayColors: false,
      xPadding: 10,
      yPadding: 10,
      intersect: false
    }
  },
});
</script>

<script src="//code.tidio.co/ls9tcikxzfazt0grmr2pabh2vpaowht4.js" async></script>

</body>


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:27 GMT -->
</html>
