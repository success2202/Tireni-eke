<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
   public function Index(){
        return view('admin.about.index', [
            'about' => About::latest()->get()
        ])
        ->with('bheading', 'Manage About Us')
        ->with('breadcrumb', 'About Post');
    }

    public function AboutCreate(){
        return view('admin.about.create')
        ->with('bheading', 'Manage About')
        ->with('breadcrumb', 'Post About');
    }

    public function AboutStore(Request $request){
        $request->validate([
            'title' => 'required',
            'contents' => 'required',
            'image' => 'required',
        ]);

        //dd($request->all());

        $data = [];
       try{ 
        if($request->contents){
            $data['contents'] = $request->contents;
        }
        if($request->title) {
            $data['title'] = $request->title;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $data['image'] = $fileName;
        }
         About::create($data);
        Session::flash('alert', 'success');
        Session::flash('message','Page added successfully');
        return back();
    
   }catch(\Exception $e){
        Session::flash('alert', 'error');
        Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
    }

    public function AboutEdit($id){
        return view('admin.about.edit', [
            'about' => About::where('id', decrypt($id))->first(),
            'latest' => About::latest()->take(5)->get()
        ])
        ->with('bheading', 'Manage About')
        ->with('breadcrumb', 'Edit Blog Post');
    }

    public function AboutUpdate(Request $request, $id){
        $about = About::whereId(decrypt($id))->first();
        try{ 
        if($request->contents){
            $about->contents = $request->contents;
        }
        if($request->title) {
            $about->title = $request->title;
        }
        if($request->image){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = time().'.'.$ext;
            $image->move('images',$fileName);
            $about->image = $fileName;
        }
        $about->save();
        Session::flash('alert', 'success');
        Session::flash('message','Blog added successfully');
        return back();
    
    }catch(\Exception $e){
        Session::flash('alert', 'error');
        Session::flash('message','Request Failed, try again');
        return back()->withInput();
    }
    }


    public function AboutDelete($id){
        $about = About::whereId(decrypt($id))->first();
        $about->delete();
        Session::flash('alert', 'error');
        Session::flash('message','Page Deleted successfully');
        return back();
    }
}
