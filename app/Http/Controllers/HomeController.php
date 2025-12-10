<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Setting;
use App\Models\Services;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;
use App\Models\TermsCondition;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function Index(){
        $data['services'] = Services::latest()->get();
        $data['about'] = About::get();
       -$data['settings'] = Setting::latest()->first();
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

     public function ContactForm(Request $request)
{
    $request->validate([
            'name'    => 'required',
            'phone'   => 'required',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = $request->all();

        // Send email to support email
        Mail::to('support@tireni-eke-gls.com.ng')->send(new ContactMail($data));

        return back()->with('success', 'Your message has been sent successfully!');
}


 public function privacypolicy(){
        $privacypolicy = PrivacyPolicy::first();
        return  view('users.pages.privacy')
        ->with('policy', $privacypolicy)
        ->with('settings', Setting::latest()->first());
    }

    
    public function Terms(){
        $termscondition = TermsCondition::first();
        return  view('users.pages.terms')
        ->with('terms', $termscondition)
        ->with('settings', Setting::latest()->first());
    }
}
