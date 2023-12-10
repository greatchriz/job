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

        {{-- <link rel="stylesheet" href="/assets/build/css/countrySelect.css"> --}}

    </head>


    <body class="bg-wight" style="background-color: #F8F8F8">
        <div class="eg-preloder">
        </div>

        <header class="header-area style-1">
            <div class="header-main-logo d-lg-block d-none">
                <a href="/"><img alt="image"
                        src="/assets/images/header1-logo.svg"></a>
            </div>
            <div class="menu-topbar-area">
                <div class="top-bar">
                    <p>Welcome Our Job Portal! <a href="bookmark.html">Save Jobs</a></p>
                    <div class="top-bar-right">
                        <div class="language-select">
                            <img src="/assets/images/icon/flag-eng.svg"
                                alt="image"><span>Language</span>
                            <ul class="topbar-sublist">
                                <li><img
                                        src="/assets/images/icon/flag-germeny.svg"
                                        alt="image"><span>Germeny</span></li>
                                <li><img
                                        src="/assets/images/icon/flag-french.svg"
                                        alt="image"><span>French</span></li>
                                <li><img
                                        src="/assets/images/icon/flag-bangla.svg"
                                        alt="image"><span>Bengali</span></li>
                            </ul>
                        </div>
                        <div class="social-area">
                            <ul>
                                <li><a href="https://www.facebook.com/"><i
                                            class="bx bxl-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i
                                            class="bx bxl-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/"><i
                                            class="bx bxl-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i
                                            class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-area">
                    <div class="header-logo">
                        <a href="/"><img alt="image" class="img-fluid"
                                src="/assets/images/header1-logo.svg"></a>
                    </div>
                    <div class="main-menu">
                        <div
                            class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                            <div class="mobile-logo-wrap">
                                <a href="/"><img alt="image"
                                        src="/assets/images/header1-logo.svg"></a>
                            </div>
                            <div class="menu-close-btn">
                                <i class="bi bi-x-lg"></i>
                            </div>
                        </div>
                        <ul class="menu-list">
                            <li @class(['active' => request()->routeIs('home')])><a href="/">Home</a></li>

                            <li @class(['active' => request()->routeIs('jobs.index')])><a href="/jobs">Find Jobs</a></li>

                            <li @class(['active' => request()->routeIs('visa-apply.create')])><a href="/visa-apply">Apply For a Visa</a></li>


                        </ul>
                        <div class="for-mobile-menu d-lg-none d-block">
                            @auth
                                @if(auth()->user()->hasRole('admin'))
                                    <div class="sign-in-btn mb-25">
                                        <a class="primry-btn-1 lg-btn" href="/admin/job-applications">
                                            <svg width="15" height="15"
                                                viewBox="0 0 15 15"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                                            </svg>
                                            Admin Job Applications</a>

                                        <a
                                            class="primry-btn-1 lg-btn"
                                            href="/admin/form-inputs"
                                        >
                                            <svg
                                                width="15"
                                                height="15"
                                                viewBox="0 0 15 15"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z"
                                                />
                                            </svg>
                                            Admin Form Input
                                        </a>
                                    </div>
                                @else
                                    <div class="sign-in-btn mb-25">
                                        <a class="primry-btn-1 lg-btn" href="/dashboard">
                                            <svg width="15" height="15"
                                                viewBox="0 0 15 15"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                                            </svg>
                                            Dashboard</a>
                                    </div>
                                @endif

                            @else
                                <div class="sign-in-btn mb-25">
                                    <a class="primry-btn-1 lg-btn" href="/login">
                                        <svg width="15" height="15"
                                            viewBox="0 0 15 15"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                                        </svg>
                                        Sign In</a>
                                </div>
                                <div class="post-job-btn mb-30">
                                    <a class="primry-btn-2 lg-btn" href="/register">
                                        <svg width="15" height="13"
                                            viewBox="0 0 15 13"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.1367 0H4.86329C4.66914 0 4.51173 0.151188 4.51173 0.337662V1.79366H1.43168C0.642247 1.79363 0 2.41049 0 3.16868V11.6249C0 12.3831 0.642247 13 1.43168 13H13.5683C14.3578 13 15 12.3831 15 11.6249V3.16868C15 2.41049 14.3578 1.79363 13.5683 1.79363H10.4883V0.337662C10.4883 0.15116 10.3309 0 10.1367 0ZM5.21485 0.675325H9.78518V1.79366H5.21485V0.675325ZM13.5683 12.3247H1.43168C1.02996 12.3247 0.703126 12.0108 0.703126 11.625V5.31469L5.6836 7.11899V8.14608C5.6836 8.33255 5.84102 8.48374 6.03517 8.48374H8.96486C9.15901 8.48374 9.31642 8.33255 9.31642 8.14608V7.11899L14.2969 5.31472V11.625C14.2969 12.0108 13.9701 12.3247 13.5683 12.3247ZM6.38673 7.80841V6.79543H8.6133V7.80841H6.38673ZM14.2969 3.16868V4.59294L9.3108 6.39926C9.28191 6.24073 9.13821 6.1201 8.96486 6.1201H6.03517C5.86182 6.1201 5.71812 6.2407 5.68923 6.39926L0.703126 4.59297V3.16868C0.703126 2.78284 1.02993 2.46896 1.43168 2.46896H13.5683C13.9701 2.46896 14.2969 2.78284 14.2969 3.16868ZM13.4071 11.0443C13.4071 11.2308 13.2497 11.382 13.0555 11.382H10.1697C9.97558 11.382 9.81816 11.2308 9.81816 11.0443C9.81816 10.8578 9.97558 10.7067 10.1697 10.7067H13.0555C13.2497 10.7067 13.4071 10.8578 13.4071 11.0443ZM1.89337 3.67202C1.89337 3.48555 2.05079 3.33436 2.24494 3.33436H4.09064C4.28479 3.33436 4.44221 3.48555 4.44221 3.67202C4.44221 3.8585 4.28479 4.00968 4.09064 4.00968H2.24494C2.05079 4.00968 1.89337 3.8585 1.89337 3.67202Z" />
                                        </svg>
                                            Join Us
                                    </a>
                                </div>
                            @endauth
                            <div class="social-area">
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i
                                                class="bx bxl-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i
                                                class="bx bxl-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i
                                                class="bx bxl-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/"><i
                                                class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="nav-right d-flex jsutify-content-end align-items-center">
                        <ul>
                            @auth
                                @if(auth()->user()->hasRole('admin'))
                                    <li class="d-md-flex d-none">
                                        <div class="sign-in-btn">
                                            <a class="primry-btn-1 lg-btn"
                                                href="/admin/job-applications">
                                                <svg width="15" height="15"
                                                    viewBox="0 0 15 15"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                                                </svg>
                                                Admin Job Applications</a>
                                        </div>
                                    </li>

                                    <li class="d-md-flex d-none">
                                        <div class="sign-in-btn">
                                            <a class="primry-btn-1 lg-btn"
                                                href="/admin/form-inputs">
                                                <svg width="15" height="15"
                                                    viewBox="0 0 15 15"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                                                </svg>
                                                Admin Form Inputs</a>
                                        </div>
                                    </li>
                                @else
                                    <li class="d-md-flex d-none">
                                        <div class="sign-in-btn">
                                            <a class="primry-btn-1 lg-btn"
                                                href="/dashboard">
                                                <svg width="15" height="15"
                                                    viewBox="0 0 15 15"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                                                </svg>
                                                Dashboard</a>
                                        </div>
                                    </li>
                                @endif

                            @else
                                <li class="d-md-flex d-none">
                                    <div class="sign-in-btn">
                                        <a class="primry-btn-1 lg-btn"
                                            href="/login">
                                            <svg width="15" height="15"
                                                viewBox="0 0 15 15"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.8033 2.19669C11.3868 0.780144 9.50329 0 7.5 0C5.49671 0 3.61324 0.780144 2.19669 2.19669C0.780144 3.61324 0 5.49671 0 7.5C0 9.50329 0.780144 11.3868 2.19669 12.8033C3.61324 14.2199 5.49671 15 7.5 15C9.50329 15 11.3868 14.2199 12.8033 12.8033C14.2199 11.3868 15 9.50329 15 7.5C15 5.49671 14.2199 3.61324 12.8033 2.19669ZM3.25504 12.5771C3.50269 10.4462 5.33478 8.80096 7.5 8.80096C8.64143 8.80096 9.71478 9.24568 10.5222 10.0529C11.2042 10.7351 11.6344 11.6258 11.7451 12.5769C10.5949 13.5402 9.11407 14.1211 7.5 14.1211C5.88593 14.1211 4.40517 13.5403 3.25504 12.5771ZM7.5 7.89574C6.24401 7.89574 5.22205 6.87378 5.22205 5.61779C5.22205 4.36169 6.24401 3.33984 7.5 3.33984C8.75599 3.33984 9.77795 4.36169 9.77795 5.61779C9.77795 6.87378 8.75599 7.89574 7.5 7.89574ZM12.5015 11.834C12.2776 10.9311 11.8105 10.0985 11.1436 9.43153C10.6034 8.89137 9.96437 8.48614 9.26743 8.23219C10.1052 7.66399 10.6569 6.70406 10.6569 5.61779C10.6569 3.87714 9.24065 2.46094 7.5 2.46094C5.75935 2.46094 4.34315 3.87714 4.34315 5.61779C4.34315 6.70464 4.89521 7.66491 5.73372 8.23299C5.09251 8.46668 4.49913 8.82797 3.98861 9.30359C3.24932 9.99207 2.73594 10.8699 2.4979 11.8333C1.48979 10.6712 0.878906 9.15562 0.878906 7.5C0.878906 3.84911 3.84911 0.878906 7.5 0.878906C11.1509 0.878906 14.1211 3.84911 14.1211 7.5C14.1211 9.15596 13.51 10.6718 12.5015 11.834Z" />
                                            </svg>
                                            Sign In</a>
                                    </div>
                                </li>

                                <li class="d-md-flex d-none">
                                    <div class="post-job-btn">
                                        <a class="primry-btn-2 lg-btn"
                                            href="/register">Register
                                            <svg width="15" height="13"
                                                viewBox="0 0 15 13"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.1367 0H4.86329C4.66914 0 4.51173 0.151188 4.51173 0.337662V1.79366H1.43168C0.642247 1.79363 0 2.41049 0 3.16868V11.6249C0 12.3831 0.642247 13 1.43168 13H13.5683C14.3578 13 15 12.3831 15 11.6249V3.16868C15 2.41049 14.3578 1.79363 13.5683 1.79363H10.4883V0.337662C10.4883 0.15116 10.3309 0 10.1367 0ZM5.21485 0.675325H9.78518V1.79366H5.21485V0.675325ZM13.5683 12.3247H1.43168C1.02996 12.3247 0.703126 12.0108 0.703126 11.625V5.31469L5.6836 7.11899V8.14608C5.6836 8.33255 5.84102 8.48374 6.03517 8.48374H8.96486C9.15901 8.48374 9.31642 8.33255 9.31642 8.14608V7.11899L14.2969 5.31472V11.625C14.2969 12.0108 13.9701 12.3247 13.5683 12.3247ZM6.38673 7.80841V6.79543H8.6133V7.80841H6.38673ZM14.2969 3.16868V4.59294L9.3108 6.39926C9.28191 6.24073 9.13821 6.1201 8.96486 6.1201H6.03517C5.86182 6.1201 5.71812 6.2407 5.68923 6.39926L0.703126 4.59297V3.16868C0.703126 2.78284 1.02993 2.46896 1.43168 2.46896H13.5683C13.9701 2.46896 14.2969 2.78284 14.2969 3.16868ZM13.4071 11.0443C13.4071 11.2308 13.2497 11.382 13.0555 11.382H10.1697C9.97558 11.382 9.81816 11.2308 9.81816 11.0443C9.81816 10.8578 9.97558 10.7067 10.1697 10.7067H13.0555C13.2497 10.7067 13.4071 10.8578 13.4071 11.0443ZM1.89337 3.67202C1.89337 3.48555 2.05079 3.33436 2.24494 3.33436H4.09064C4.28479 3.33436 4.44221 3.48555 4.44221 3.67202C4.44221 3.8585 4.28479 4.00968 4.09064 4.00968H2.24494C2.05079 4.00968 1.89337 3.8585 1.89337 3.67202Z" />
                                            </svg>
                                        </a>
                                    </div>
                                </li>
                            @endauth

                        </ul>
                        <div class="sidebar-button mobile-menu-btn ">
                            <i class="bi bi-list"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

            <!-- Page Content -->

                {{ $slot }}

            <footer class="footer1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div
                            class="col-lg-3 col-md-4 col-sm-6 mb--50 d-flex justify-content-sm-start justify-content-center">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h5>About Company</h5>
                                </div>
                                <div class="menu-container">
                                    <ul>
                                        <li><a href="contact.html">Contact Us <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="#">Terms & Condition <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="#">Privacy & Policy <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="#">Candidate Listing <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-3 col-md-4 col-sm-6 mb--50 d-flex justify-content-md-center justify-content-sm-end justify-content-center">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h5>For Candidate’s</h5>
                                </div>
                                <div class="menu-container">
                                    <ul>
                                        <li><a href="edit-profile-2.html">Create
                                                Resume <i class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="category.html">Browse
                                                Categories <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="bookmark.html">Save Jobs List
                                                <i class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="/jobs">Browse Jobs
                                                <i class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="dashboard.html">Candidate
                                                Dashboard <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-3 col-md-4 col-sm-6 mb--50 d-flex justify-content-lg-center justify-content-md-end justify-content-sm-start justify-content-center">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h5>For Employer’s</h5>
                                </div>
                                <div class="menu-container">
                                    <ul>
                                        <li><a href="/register">Post A Job <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="#">Browse Candidates <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="pricing-plan.html">Job Packages
                                                <i class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="/jobs">Jobs
                                                Featured <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                        <li><a href="company-dashboard.html">Employer
                                                Dashboard <i
                                                    class="bx bx-up-arrow-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-lg-end justify-content-md-center justify-content-sm-end justify-content-center">
                            <div class="footer-widget four">
                                <div class="widget-title">
                                    <h5>Download App</h5>
                                </div>
                                <div class="app-list">
                                    <ul>
                                        <li>
                                            <a href="#"><img
                                                    src="/assets/images/icon/apple-app.svg"
                                                    alt></a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="/assets/images/icon/google-play.svg"
                                                    alt></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-btm">
                        <div class="footer-logo">
                            <img src="/assets/images/footer-logo.svg" alt>
                        </div>
                        <div class="row align-items-center">
                            <div
                                class="col-lg-6 d-flex justify-content-lg-start justify-content-center">
                                <div class="support">
                                    <div class="icon">
                                        <img
                                            src="/assets/images/icon/footer-support-icon.svg"
                                            alt>
                                    </div>
                                    <div class="content">
                                        <h5>Support Line:</h5>
                                        <a href="tel:+099-03573983465">+099-035 7398
                                            3465</a>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                                <div class="footer-btm-menu">
                                    <ul>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms of Services</a></li>
                                        <li><a
                                                href="https://www.google.com/maps/place/Egens+Lab/@23.8340712,90.3634979,17z/data=!3m1!4b1!4m5!3m4!1s0x3755c14c8682a473:0xa6c74743d52adb88!8m2!3d23.8340663!4d90.3656866">Our
                                                Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row border-top align-items-center">
                            <div
                                class="col-lg-6 d-flex  justify-content-lg-start justify-content-center">
                                <div class="copyright-area">
                                    <p>©Copyright 2023 <a href="#">JOBES</a> |
                                        Design By <a
                                            href="https://www.egenslab.com/">Egenslab</a></p>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                                <div class="social-area">
                                    <h6>Follow JOBES:</h6>
                                    <ul>
                                        <li><a href="https://www.facebook.com/"><i
                                                    class="bx bxl-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/"><i
                                                    class="bx bxl-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i
                                                    class="bx bxl-linkedin"></i></a></li>
                                        <li><a href="https://www.instagram.com/"><i
                                                    class="bx bxl-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        <script>
            $("#country_selector").countrySelect({
                // defaultCountry: "jp",
                // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                responsiveDropdown: true,
                preferredCountries: ['ca', 'gb', 'us']
            });
        </script>
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
        <!-- Load jQuery from CDN so can run demo immediately -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="/assets/build/js/countrySelect.js"></script>
		<script>
			$("#country_selector").countrySelect({
				// defaultCountry: "jp",
				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
				// responsiveDropdown: true,
				preferredCountries: ['ca', 'gb', 'us']
			});
		</script>

    </body>
</html>
