<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //dashboard method
    public function dashboard(){
        return view('user.dashboard');
    }
}
