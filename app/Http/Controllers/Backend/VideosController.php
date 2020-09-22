<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\VideoRequest;
use App\Http\Requests\backend\UpdateVideoRequest;
use App\Video;
use App\Traits\CanUpload;
class VideosController extends Controller
{
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $Videos=Video::all(); 
       return view("backend.pages.videos.index",compact('Videos'));
    }
    public function videopage()
    {
       $video=Video::first(); 
       return view("backend.pages.videos.videos",compact('video'));
    }
    public function videosstore(VideoRequest $request)
    {
        $video= new Video();
        $video->title = $request->get('title');
        $video->link = $request->get('link');
        if ($request->file('image')) {
            $video->image = $this->upload($request->file('image'), 'video')->getFileName();
        } else {
            $video->image = $video->image;
        }
        if ($request->file('homeimage')) {
            $video->homeimage = $this->upload($request->file('homeimage'), 'video')->getFileName();
        } else {
            $video->homeimage = $video->homeimage;
        }
        if ($request->file('bannerimage')) {
            $video->bannerimage = $this->upload($request->file('bannerimage'), 'video')->getFileName();
        } else {
            $video->bannerimage = $video->bannerimage;
        }
        
        if($request->showhomepage){
            $video->showhomepage  =$request->showhomepage;

        }
        $video->save();

        return redirect()->route('video')->with('message', 'Video successfully inserted ');
    }
    public function edit($id)
    {
        $video=Video::find($id);
        return view('backend.pages.videos.edit',compact('video'));
    }
    public function update(UpdateVideoRequest $request, $id)
    {
        $video=Video::find($id);
        $video->title = $request->get('title');
        $video->link = $request->get('link');

        if ($request->file('image')) {
            $video->image = $this->upload($request->file('image'), 'video')->getFileName();
        } else {
            $video->image = $video->image;
        }
        if ($request->file('homeimage')) {
            $video->homeimage = $this->upload($request->file('homeimage'), 'video')->getFileName();
        } else {
            $video->homeimage = $video->homeimage;
        }
        if ($request->file('bannerimage')) {
            $video->bannerimage = $this->upload($request->file('bannerimage'), 'video')->getFileName();
        } else {
            $video->bannerimage = $video->bannerimage;
        }
        if($request->showhomepage){
            $video->showhomepage  =$request->showhomepage;

        }
        $video->save();
        return redirect()->route('video')->with('message', 'Video successfully updated ');
    }

    public function destroy(Request $request)
    {
        $video=Video::find($request->video_id);
        $video->delete();
        return redirect()->back()->with('messagedelete', 'Video successfully deleted ');
    }
}
