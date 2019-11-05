<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function dashboard()
    {
        return view("frontend.home.dashboard");
    }
}
