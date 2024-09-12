<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $name = "Kelvin";

        return view('welcome', ["name" => $name]);
    }
}
