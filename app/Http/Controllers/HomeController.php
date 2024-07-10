<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Tampilkan Laman Home
    public function index(){
        return view('home.welcome');
    }
}
