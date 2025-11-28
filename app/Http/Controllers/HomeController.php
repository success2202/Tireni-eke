<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Services;

class HomeController extends Controller
{
    public function Index(){
        $data['services'] = Services::latest()->get();
        $data['about'] = About::get();
       
        return view('users.index', $data);
    }

     public function AboutUs()
    {
        return view('users.pages.aboutUs');
        // ->with('blogs', Blog::latest()->get());
    }

    public function ContactUs()
    {
        return view('users.pages.contactUs');
    }

}
