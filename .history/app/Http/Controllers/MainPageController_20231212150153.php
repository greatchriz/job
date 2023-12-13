<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{

    // Home
    // Terms & Conditions
    // Privacy Policy
    // Blog
    // Contact Us

    //home


    public function home()
    {
        return view('main-pages.home');
    }

    //terms

    public function terms()
    {
        return view('main-pages.terms');
    }

    //privacy-policy

    public function privacyPolicy()
    {
        return view('main-pages.privacy-policy');
    }

    //blog

    public function blog()
    {
        return view('main-pages.blog');
    }

    //contact-us

    public function contactUs()
    {
        return view('main-pages.contact-us');
    }
}
