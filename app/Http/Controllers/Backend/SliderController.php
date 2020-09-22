<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\SliderRequest;
use App\Http\Requests\backend\UpdateSliderRequest;
use App\Slider;
use App\Traits\CanUpload;
class SliderController extends Controller
{
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $sliders=Slider::all(); 
       return view("backend.pages.slider.index",compact('sliders'));
    }
    public function sliderpage()
    {
       $slider=Slider::first(); 
       return view("backend.pages.slider.slider",compact('slider'));
    }

    public function sliderstore(SliderRequest $request)
    {
        $slider= new Slider();
        $slider->link = $request->link;
        $slider->caption = $request->caption;
        if ($request->file('image')) {
            $slider->image = $this->upload($request->file('image'), 'slider')->getFileName();
        } else {
            $slider->image = $slider->image;
        }
        
        $slider->save();

        return redirect()->route('slider')->with('message', 'Slider successfully inserted ');
    }
    public function edit($id)
    {
        $slider=Slider::find($id);
        return view('backend.pages.slider.edit',compact('slider'));
    }
    public function update(UpdateSliderRequest $request, $id)
    {
        $slider=Slider::find($id);
        $slider->link = $request->get('link');
        $slider->caption = $request->get('caption');
        if ($request->file('image')) {
            $slider->image = $this->upload($request->file('image'), 'slider')->getFileName();
        } else {
            $slider->image = $slider->image;
        }
        $slider->save();

        return redirect()->route('slider')->with('message', 'Slider successfully updated ');
    }

    public function destroy(Request $request)
    {
        $slider=Slider::find($request->slider_id);
        $slider->delete();
        return redirect()->back()->with('messagedelete', 'Slider successfully deleted ');
    }
   
}
