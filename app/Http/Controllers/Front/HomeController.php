<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home()
    {
        return view('front.pages.home');
    }

    public function about()
    {
        return view('front.pages.about');
    }
    
    public function services()
    {
        return view('front.pages.services');
    }
    
    public function academy()
    {
        return view('front.pages.academy');
    }

    public function studio()
    {
        return view('front.pages.studio');
    }

    public function contact()
    {
        return view('front.pages.contact');
    }
}
