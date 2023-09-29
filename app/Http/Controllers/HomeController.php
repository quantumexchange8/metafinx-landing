<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function overview()
    {
        return view('masters.overview');
    }

    public function ipoproject()
    {
        return view('masters.ipoproject');
    }

    public function iposcheme()
    {
        return view('masters.iposcheme');
    }

    public function aboutus()
    {
        return view('masters.aboutus');
    }
}
