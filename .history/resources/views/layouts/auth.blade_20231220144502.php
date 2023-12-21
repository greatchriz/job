<!DOCTYPE html>
<html lang="en">


  <!-- Mirrored from creativelayers.net/themes/superio/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:41 GMT -->

  <head>
    <meta charset="utf-8">
    <title>Superio | Just another HTML Template | Login</title>

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
                <div class="divider"><span>or</span></div>
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
