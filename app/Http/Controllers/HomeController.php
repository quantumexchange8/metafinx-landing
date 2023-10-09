<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscriptionEmail;

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

    public function subscription(Request $request)
    {

        if($request->email != null)
        {

            $subscribe_email = SubscriptionEmail::create([
                'email' => $request->email,
            ]);

            return redirect()->back();

        } else {
            return redirect()->back();
        }

        
    }
}
