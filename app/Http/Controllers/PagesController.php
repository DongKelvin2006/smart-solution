<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('home' );
    }
    public function index2() {
        return view('welcome' );
    }
    public function index3() {
        return view('about' );
    }
    public function index4() {
        return view('contacts' );
    }
}
