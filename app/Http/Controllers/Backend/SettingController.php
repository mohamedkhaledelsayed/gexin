<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Setting;
class SettingController extends Controller
{
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function setting($id)
    {
        $setting =Setting::findOrFail($id);
        return view('backend.pages.settings.sidbar',compact('setting'));
    }
    public function settingstatus(Request $request, $id)
    {
        $setting =Setting::findOrFail($id);
        if( $request->bestsellergame){
            $setting->BestsellerGame =$request->bestsellergame;

        }else{
            $setting->BestsellerGame  =0;
        }
        if(  $request->bestsellerproduct){
            $setting->BestsellerProduct =$request->bestsellerproduct;

        }else{
            $setting->BestsellerProduct  =0;
        }
        if(  $request->lastnews){
            $setting->LastNews =$request->lastnews;

        }else{
            $setting->LastNews  =0;
        }
        if(  $request->categorygame){
            $setting->CategoryGame =$request->categorygame;

        }else{
            $setting->CategoryGame  =0;
        }
        if(  $request->categoryproduct){
            $setting->CategoryProduct =$request->categoryproduct;

        }else{
            $setting->CategoryProduct  =0;
        }
        if(  $request->categories){
            $setting->categories =$request->categories;

        }else{
            $setting->categories  =0;
        }
        $setting->update();
        
        return redirect()->back();
    }
}
