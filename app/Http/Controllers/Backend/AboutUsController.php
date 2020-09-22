<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\AboutUsRequest;
use App\Traits\CanUpload;
use App\AboutUs;
class AboutUsController extends Controller
{
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $aboutus=AboutUs::all(); 
       return view("backend.pages.aboutus.index",compact('aboutus'));
    }
    public function aboutus()
    {
       $aboutus =AboutUs::first(); 
       return view("backend.pages.aboutus.create",compact('aboutus'));
    }
       public function aboutusstore(AboutUsRequest $request)
    {
        $aboutus= new AboutUs();
        $aboutus->title = $request->get('title');
        $aboutus->description =$request->get('description');

    
        if ($request->file('bannerimage')) {
            $aboutus->bannerimage = $this->upload($request->file('bannerimage'), 'aboutus')->getFileName();
        } else {
            $aboutus->bannerimage = $aboutus->bannerimage;
        }
        $aboutus->save();
        return redirect()->route('aboutuspage')->with('message', 'About Us successfully inserted ');
    }
    public function edit($id)
    {
        $aboutus=AboutUs::find($id);
        return view('backend.pages.aboutus.edit',compact('aboutus'));
    }
    public function update(AboutUsRequest $request, $id)
    {
        $aboutus=AboutUs::find($id);
        $aboutus->title = $request->get('title');
        $aboutus->description =$request->get('description');

        if ($request->file('bannerimage')) {
            $aboutus->bannerimage = $this->upload($request->file('bannerimage'), 'aboutus')->getFileName();
        } else {
            $aboutus->bannerimage = $aboutus->bannerimage;
        }
        $aboutus->save();
        return redirect()->route('aboutuspage')->with('message', 'About Us successfully updated ');
    }

    public function destroy(Request $request)
    {
        $aboutus=AboutUs::find($request->aboutus_id);
        $aboutus->delete();
        return redirect()->back()->with('messagedelete', 'About Us successfully deleted ');
    }
}
