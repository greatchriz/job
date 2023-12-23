<!DOCTYPE html>
<html lang="en">


  <!-- Mirrored from creativelayers.net/themes/superio/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:41 GMT -->

  @php
        $pagesmeta = [
        [
        'url' => route('home'),
        'title' => 'Polticventure: Your Gateway to Opportunity and Mobility',
        'description' => 'Find your dream job abroad, navigate Visa and Residency applications, and plan your relocation with
        Polticventure\'s comprehensive suite of services.',
        'keywords' => 'job board, overseas jobs, Visa application, Residency permit, relocation services, flights, hotels,
        apartments, car rentals, Polticventure',
        'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
        'url' => route('about-us'),
        'title' => 'Polticventure: Who We Are and What We Do.',
        'description' => 'Discover Polticventure\'s mission, values, and team. Learn how we help individuals and businesses
        thrive in the international job market.',
        'keywords' => 'Polticventure, mission statement, values, team, global mobility, job seekers, employers, relocation
        assistance',
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
        'description' => 'Dive into expert tips, industry trends, and inspiring stories to navigate the international job market
        and relocation process successfully.',
        'keywords' => 'Polticventure blog, career advice, relocation tips, international job market, expat life',
        'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
        'url' => route('job-listing'),
        'title' => 'Polticventure: Find Your Dream Job Abroad.',
        'description' => 'Browse thousands of exciting job opportunities worldwide. Start your journey to a fulfilling career
        abroad today!',
        'keywords' => 'international jobs, job search, overseas careers, Polticventure job board, career opportunities',
        'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
        'url' => route('services'),
        'title' => 'Polticventure: Our Services: Your Global Mobility Partner.',
        'description' => 'Simplify your relocation with our comprehensive services, including Visa applications, Residency
        permits, flights, accommodation, and more.',
        'keywords' => 'Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals,
        Polticventure services',
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
        ],

        [
        'url' => route('register'),
        'title' => 'Join Polticventure - Unlock Your Global Career Journey',
        'description' => 'Sign up for free and explore a world of possibilities with Polticventure. Find your dream job, navigate visa complexities, and settle seamlessly in your new destination.',
        'keywords' => 'register, Polticventure, job search, visa application, relocation assistance',
        'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        [
        'url' => route('login'),
        'title' => 'Welcome Back to Polticventure - Access Your Personalized Dashboard',
        'description' => 'Log in to your Polticventure account and manage your job applications, track visa progress, and access relocation resources with ease.',
        'keywords' => 'login, Polticventure, job search, visa application, relocation assistance',
        'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',

        ],

        [
        'url' => route('password.request'),
        'title' => 'Recover Your Access - Reset Your Polticventure Password',
        'description' => 'Don\'t worry if you\'ve forgotten your password. Enter your email address and we\'ll help you regain access to your Polticventure account.',
        'keywords' => 'forgot password, Polticventure, job search, visa application, relocation assistance',
        'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],

        //dashboard page

        [
        'url' => route('dashboard'),
        'title' => 'Polticventure: Your Global Mobility Partner.',
        'description' => 'Simplify your relocation with our comprehensive services, including Visa applications, Residency
        permits, flights, accommodation, and more.',
        'keywords' => 'Visa application, Residency permit, relocation services, flights, hotels, apartments, car rentals,
        Polticventure services',
        'ogImage' => 'https://polticventure.co/images/index-13/header/test.png',
        ],


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
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        >
        <title>{{ $page['title'] }}</title>
        <meta
            name="description"
            content="{{ $page['description'] }}"
        >
        <meta
            name="keywords"
            content="{{ $page['keywords'] }}"
        >

        <meta
            property="og:title"
            content="{{ $page['title'] }}"
        >
        <meta
            property="og:description"
            content="{{ $page['description'] }}"
        >
        <meta
            property="og:image"
            content="{{ $page['ogImage'] }}"
        >
        <meta
            property="og:url"
            content="{{ $page['url'] }}"
        >
        <meta
            property="og:type"
            content="website"
        >

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

  <body>

    <div class="page-wrapper">

      <!-- Preloader -->
      <div class="preloader"></div>

      <!-- Main Header-->
      <header class="main-header">
        <div class="container-fluid">
          <!-- Main box -->
          <div class="main-box">
            <!--Nav Outer -->
            <div class="nav-outer">
              <div class="logo-box">
                <div class="logo"><a href="/">
                    <x-main-pages.logo />
                    </a></div>
              </div>
            </div>

            <div class="outer-box">
              <!-- Login/Register -->
              <div class="btn-box">
                <a
                  href="login-popup.html"
                  class="theme-btn btn-style-three call-modal"
                >Login / Register</a>
                <a
                  href="dashboard-post-job.html"
                  class="theme-btn btn-style-one"
                ><span class="btn-title">Job Post</span></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile Header -->
       <div class="mobile-header">
            <div class="logo"><a href="/">
                    <x-main-pages.logo />
                </a></div>
        </div>

        <!-- Mobile Nav -->
        <div id="nav-mobile"></div>
      </header>
      <!--End Main Header -->

      <!-- Info Section -->
      <div class="login-section">
        <div
          class="image-layer"
          style="background-image: url(images/background/12.jpg);"
        ></div>
        <div class="outer-box">
          <!-- Login Form -->
          <div class="login-form default-form">
            <div class="form-inner">
              <h3>{{ $title }}</h3>
              <!--Login Form-->

              <x-validation-errors class="mb-4" />

              @yield('session-status')

              @yield('content')


              <div class="bottom-box">
                @yield('bottom-box')
                <div class="divider"></div>
              </div>
            </div>
          </div>
          <!--End Login Form -->
        </div>
      </div>
      <!-- End Info Section -->


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
  </body>


  <!-- Mirrored from creativelayers.net/themes/superio/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:41 GMT -->

</html>
