<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('catalog');
    }
    
    public function about_company() {
        return view('about_company');
    }

    public function product($product = null) {
        return view('product', ['product' => $product]);
    }

    public function location() {
        return view('location');
    }

    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }
}
