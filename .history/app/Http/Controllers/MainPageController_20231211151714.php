<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
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
}
