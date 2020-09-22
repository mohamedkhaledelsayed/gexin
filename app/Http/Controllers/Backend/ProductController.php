<?php


namespace App\Http\Controllers\Backend;

use App\CategoryProduct;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\ProductRequest;
use App\Http\Requests\backend\UpdateProductRequest;
use App\Product;
use App\Traits\CanUpload;

class ProductController extends Controller
{
        
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $products=Product::all(); 
       return view("backend.pages.products.index",compact('products'));
    }
    public function product()
    {
       $product =Product::first(); 
       $categoryproducts=CategoryProduct::all();
       return view("backend.pages.products.create",compact('product','categoryproducts'));
    }
    public function productstore(ProductRequest $request)
    {
        $product = new Product;
        $product->title=request('title');
        $product->link=request('link');
        $product->description=request('description');
        $product->price=request('price');
        $product->offer_price=request('discount');
        $product->percentage=(request('discount'))*100/(request('price'));

        if ($request->file('image')) {
            $product->image = $this->upload($request->file('image'), 'products')->getFileName();
        } else {
            $product->image = $product->image;
        }
        if ($request->file('bannerimage')) {
            $product->bannerimage = $this->upload($request->file('bannerimage'), 'products')->getFileName();
        } else {
            $product->bannerimage = $product->bannerimage;
        }
        if ($request->bestseller ==1 ){
            $product->best_seller=1;
        }
        if($request->showhomepage){
            $product->showhomepage  =$request->showhomepage;

        }
        $product->save();

        

        $product->categoriesproducts()->attach(request('category'));


        return redirect()->route('products')->with('message', 'Product successfully inserted ');
        
    }
    public function edit($id)
    {
        $product=Product::find($id);
        $categories=CategoryProduct::all();

        return view('backend.pages.products.edit',compact('product','categories'));
    }
    public function update(UpdateProductRequest $request, $id)
    {
        $product=Product::find($id);
        $product->title=request('title');
        $product->link=request('link');
        $product->description=request('description');
        $product->price=request('price');
        $product->offer_price=request('discount');
        $product->percentage=(request('discount'))*100/(request('price'));
        if ($request->file('image')) {
            $product->image = $this->upload($request->file('image'), 'products')->getFileName();
        } else {
            $product->image = $product->image;
        }
        if ($request->file('bannerimage')) {
            $product->bannerimage = $this->upload($request->file('bannerimage'), 'products')->getFileName();
        } else {
            $product->bannerimage = $product->bannerimage;
        }
        if(  $request->bestseller){
            $product->best_seller  =$request->bestseller;

        }else{
            $product->best_seller  =0;
        }
        if(  $request->showhomepage){
            $product->showhomepage  =$request->showhomepage;

        }else{
            $product->showhomepage  =0;
        }
        $product->update();

        

        $product->categoriesproducts()->sync(request('category'));

        return redirect()->route('productpage')->with('message', 'Product successfully updated ');
    }

    public function show($id)
    {
        $product=Product::find($id);
        return view('backend.pages.products.products',compact('product'));
    }

    public function destroy(Request $request)
    {
        $product=Product::find($request->product_id);
        $product->delete();
        return redirect()->back()->with('messagedelete', 'Product successfully deleted ');
    }
}
