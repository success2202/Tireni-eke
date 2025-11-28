<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function AboutUs(){
      
       return  view('users.pages.aboutUs');
    }

    public function ContactUs(){
       return  view('users.pages.contactUs');
    }
}
