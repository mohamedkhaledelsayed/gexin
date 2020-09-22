<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\LatestNewRequest;
use App\LatestNew;
use App\Traits\CanUpload;
class LatestNewsController extends Controller
{
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $latestnews=LatestNew::all(); 
       return view("backend.pages.latestnews.index",compact('latestnews'));
    }
    public function latestnews()
    {
       $latestnew=LatestNew::first(); 
       return view("backend.pages.latestnews.latestnews",compact('latestnew'));
    }
    public function latestnewstore(LatestNewRequest $request)
    {
        $latestnew= new LatestNew();
        $latestnew->title = $request->get('title');
        $latestnew->description =$request->get('description');
        $latestnew->content	 =$request->get('content');

        if ($request->file('image')) {
            $latestnew->image = $this->upload($request->file('image'), 'latestnews')->getFileName();
        } else {
            $latestnew->image = $latestnew->image;
        }

        if ($request->file('homeimage')) {
            $latestnew->homeimage = $this->upload($request->file('homeimage'), 'latestnews')->getFileName();
        } else {
            $latestnew->homeimage = $latestnew->homeimage;
        }
        if ($request->file('bannerimage')) {
            $latestnew->bannerimage = $this->upload($request->file('bannerimage'), 'latestnews')->getFileName();
        } else {
            $latestnew->bannerimage = $latestnew->bannerimage;
        }
        if($request->showhomepage){
            $latestnew->showhomepage  =$request->showhomepage;

        }
        $latestnew->save();

        return redirect()->route('latestnewspage')->with('message', 'LatestNew successfully inserted ');
    }
    public function edit($id)
    {
        $latestnew=LatestNew::find($id);
        return view('backend.pages.latestnews.edit',compact('latestnew'));
    }
    public function update(LatestNewRequest $request, $id)
    {
        $latestnew=LatestNew::find($id);
        $latestnew->title = $request->get('title');
        $latestnew->description =$request->get('description');
        $latestnew->content	 =$request->get('content');

        if ($request->file('image')) {
            $latestnew->image = $this->upload($request->file('image'), 'latestnews')->getFileName();
        } else {
            $latestnew->image = $latestnew->image;
        }
        if ($request->file('homeimage')) {
            $latestnew->homeimage = $this->upload($request->file('homeimage'), 'latestnews')->getFileName();
        } else {
            $latestnew->homeimage = $latestnew->homeimage;
        }
        if ($request->file('bannerimage')) {
            $latestnew->bannerimage = $this->upload($request->file('bannerimage'), 'latestnews')->getFileName();
        } else {
            $latestnew->bannerimage = $latestnew->bannerimage;
        }
   
        if(  $request->showhomepage){
            $latestnew->showhomepage  =$request->showhomepage;

        }else{
            $latestnew->showhomepage  =0;
        }
        $latestnew->save();
        return redirect()->route('latestnewspage')->with('message', 'LatestNew successfully updated ');
    }

    public function destroy(Request $request)
    {
     
        $latestnew=LatestNew::find($request->latestnews_id);
        $latestnew->delete();
        return redirect()->back()->with('messagedelete', 'About Us successfully deleted ');
    }
}
