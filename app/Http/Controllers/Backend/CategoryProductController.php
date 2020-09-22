<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\CategoryProductRequest;
use App\CategoryProduct;
use App\Traits\CanUpload;

class CategoryProductController extends Controller
{
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $categoryproducts=CategoryProduct::all(); 
       return view("backend.pages.categoryproducts.index",compact('categoryproducts'));
    }
    public function categoryproduct()
    {
       $categoryproduct =CategoryProduct::first(); 
       return view("backend.pages.categoryproducts.create",compact('categoryproduct'));
    }
       public function categoriesproductstore(CategoryProductRequest $request)
    {
        $categoryproduct= new CategoryProduct();
        $categoryproduct->title = $request->get('title');
        $categoryproduct->description=request('description');

        if($request->showhomepage){
            $categoryproduct->showhomepage  =$request->showhomepage;

        }

        if ($request->file('image')) {
            $categoryproduct->image = $this->upload($request->file('image'), 'categoryproducts')->getFileName();
        }
        if ($request->file('bannerimage')) {
            $categoryproduct->bannerimage = $this->upload($request->file('bannerimage'), 'categoryproducts')->getFileName();
        } else {
            $categoryproduct->bannerimage = $categoryproduct->bannerimage;
        }
        
        $categoryproduct->save();

         return redirect()->route('categoriesproduct')->with('message', 'CategoryProduct successfully inserted ');
       
    }
    public function edit($id)
    {
        $categoryproduct=CategoryProduct::find($id);
        return view('backend.pages.categoryproducts.edit',compact('categoryproduct'));
    }
    public function update(CategoryProductRequest $request, $id)
    {
        $categoryproduct=CategoryProduct::find($id);
        $categoryproduct->title = $request->get('title');
        $categoryproduct->description=request('description');

        if(  $request->showhomepage){
            $categoryproduct->showhomepage  =$request->showhomepage;

        }else{
            $categoryproduct->showhomepage  =0;
        }
        if ($request->file('image')) {
            $categoryproduct->image = $this->upload($request->file('image'), 'categoryproducts')->getFileName();
        }
        if ($request->file('bannerimage')) {
            $categoryproduct->bannerimage = $this->upload($request->file('bannerimage'), 'categoryproducts')->getFileName();
        } else {
            $categoryproduct->bannerimage = $categoryproduct->bannerimage;
        }
        
        $categoryproduct->update();
        return redirect()->route('categoriesproduct')->with('message', 'CategoryProduct successfully updated ');
    }

    public function destroy(Request $request)
    {
        $categoryproduct=CategoryProduct::find($request->categoryproduct_id);
        $categoryproduct->delete();
        return redirect()->back()->with('messagedelete', 'CategoryProduct successfully deleted ');
    }
}
