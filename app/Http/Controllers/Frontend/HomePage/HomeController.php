<?php

namespace App\Http\Controllers\FrontEnd\HomePage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('frontend.pages.homepage');
    }
}
