<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BestSeller;
use App\Traits\CanUpload;

class BestSellerController extends Controller
{
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $bestsellers=BestSeller::all(); 
       return view("backend.pages.bestseller.index",compact('bestsellers'));
    }
    public function bestseller()
    {
       $bestseller =BestSeller::first(); 
       return view("backend.pages.bestseller.create",compact('bestseller'));
    }
       public function bestsellerstore(Request $request)
    {
        $bestseller= new BestSeller();
        $bestseller->link = $request->get('link');
 

        if ($request->file('image')) {
            $bestseller->image = $this->upload($request->file('image'), 'bestseller')->getFileName();
        } else {
            $bestseller->image = $bestseller->image;
        }
        $bestseller->save();

        return redirect()->back();
    }
    public function edit($id)
    {
        $bestseller=BestSeller::find($id);
        return view('backend.pages.bestseller.edit',compact('bestseller'));
    }
    public function update(Request $request, $id)
    {
        $bestseller=BestSeller::find($id);
        $bestseller->link = $request->get('link');
        if ($request->file('image')) {
            $bestseller->image = $this->upload($request->file('image'), 'bestseller')->getFileName();
        } else {
            $bestseller->image = $bestseller->image;
        }
        $bestseller->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $bestseller=BestSeller::find($id);
        $bestseller->delete();
        return redirect()->back();
    }
}
