<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Setting;
use App\Models\Services;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $data['services'] = Services::latest()->get();
        $data['about'] = About::get();
       
        return view('users.index', $data);
    }

     public function AboutUs()
    {
         
        return view('users.pages.aboutUs')
         ->with('about', About::whereIn('id', [1, 2, 3])->get())
         ->with('about2', About::whereIn('id', [4, 5])->get());
    }

    public function ContactUs()
    {
        return view('users.pages.contactUs')
        ->with('settings', Setting::latest()->first());
    }

}
