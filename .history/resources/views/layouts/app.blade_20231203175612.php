<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>JOBES- Job Portal HTML Template</title>

        <link rel="icon" href="/assets/images/sm-logo.svg" type="image/gif"
        sizes="20x20">

        <link rel="stylesheet" href="/assets/css/all.css">

        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="/assets/css/boxicons.min.css">
        <link rel="stylesheet" href="/assets/css/summernote.min.css">

        <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">

        <link rel="stylesheet" href="/assets/css/jquery-ui.css">

        <link rel="stylesheet" href="/assets/css/swiper-bundle.css">

        <link rel="stylesheet" href="/assets/css/slick-theme.css">
        <link rel="stylesheet" href="/assets/css/slick.css">

        <link rel="stylesheet" href="/assets/css/nice-select.css">
        <link rel="stylesheet" href="/assets/css/select2.min.css">

        <link rel="stylesheet" href="/assets/css/animate.css">
        <link rel="stylesheet" href="/assets/css/jquery.fancybox.min.css">

        <link rel="stylesheet" href="/assets/css/datepicker.min.css">

        <link rel="stylesheet" href="/assets/css/jquery-ui.css">

        <link rel="stylesheet" href="/assets/css/style.css">

    </head>


    <body class="bg-wight">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script src="/assets/js/jquery-3.6.0.min.js"></script>
        <script src="/assets/js/jquery-ui.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/assets/js/swiper-bundle.min.js"></script>
        <script src="/assets/js/jquery.nice-select.js"></script>
        <script src="/assets/js/jquery.fancybox.min.js"></script>
        <script src="/assets/js/slick.js"></script>
        <script src="/assets/js/summernote.min.js"></script>
        <script src="/assets/js/jquery.waypoints.min.js"></script>
        <script src="/assets/js/counterup.js"></script>
        <script src="/assets/js/select2.min.js"></script>
        <script src="/assets/js/viewport.jquery.js"></script>
        <script src="/assets/js/jquery.nice-number.min.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
