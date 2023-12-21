<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:24 GMT -->
<head>
  <meta charset="utf-8">
  <title>Superio | Just another HTML Template | Dashboard</title>

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

</body>


<!-- Mirrored from creativelayers.net/themes/superio/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 07:35:27 GMT -->
</html>
