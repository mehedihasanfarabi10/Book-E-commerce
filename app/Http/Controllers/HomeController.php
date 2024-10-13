<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomePage()
    {
        return view('pages.home-page');
    }

    public function LoginPage()
    {
        return view('pages.login-page');
    }
    public function RegisterPage()
    {
        return view('pages.register-page');
    }
    public function forgotPassword()
    {
        return view('pages.forgot-password');
    }
    public function shopCart()
    {
        return view('pages.shop-cart');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function termCondition()
    {
        return view('pages.term-condition');
    }
    public function aboutUs()
    {
        return view('pages.about-us');
    }
    public function compare()
    {
        return view('pages.compare');
    }
    public function wishlist()
    {
        return view('pages.wishlist');
    }

}
