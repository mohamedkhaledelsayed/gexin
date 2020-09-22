<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\CategoryRequest;
use App\Category;
use App\Category_Game;

use App\Traits\CanUpload;

class CategoryController extends Controller
{
    
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $categories=Category::all(); 
       return view("backend.pages.categories.index",compact('categories'));
    }
    public function category()
    {
       $category =Category::first(); 
       return view("backend.pages.categories.create",compact('category'));
    }
       public function categorystore(CategoryRequest $request)
    {
        $category= new Category();
        $category->title = $request->get('title');
        $category->designs  =$request->get('designs');
        $category->description=request('description');

        if($request->showabovehome){
            $category->showabovehome  =$request->showabovehome;

        }else{
            $category->showabovehome  =0;
            
        }

        if(  $request->statusshowhome){
            $category->statusshowhome  =$request->statusshowhome;

        }else{
            $category->statusshowhome  =0;
        }

        if ($request->file('homeimage')) {
            $category->homeimage = $this->upload($request->file('homeimage'), 'category')->getFileName();
        } else {
            $category->homeimage = $category->homeimage;
        }
        if ($request->file('iconimage')) {
            $category->iconimage = $this->upload($request->file('iconimage'), 'category')->getFileName();
        } else {
            $category->iconimage = $category->iconimage;
        }
        if ($request->file('sidebarimage')) {
            $category->sidebarimage = $this->upload($request->file('sidebarimage'), 'category')->getFileName();
        } else {
            $category->sidebarimage = $category->sidebarimage;
        }
        if ($request->file('bannerimage')) {
            $category->bannerimage = $this->upload($request->file('bannerimage'), 'category')->getFileName();
        } else {
            $category->bannerimage = $category->bannerimage;
        }
        $category->save();

        return redirect()->route('categories')->with('message', 'Category successfully inserted ');
    }
    public function show($id)
    {
        $category =Category::find($id);
        $categories =Category::get();

        $game =Category_Game::join('games', 'category_game.game_id', '=', 'games.id')
        ->join('categories', 'category_game.category_id', '=', 'categories.id')
        ->where('category_id',$id)
        ->get();

            
       return View('backend.pages.categories.show',compact('categories','category','game'));
    }
    public function edit($id)
    {
        $category=Category::find($id);
        return view('backend.pages.categories.edit',compact('category'));
    }
    public function update(CategoryRequest $request, $id)
    {
        $category=Category::find($id);
        $category->title = $request->get('title');
        $category->designs  =$request->get('designs');
        $category->description=request('description');

        if($request->showabovehome){
            $category->showabovehome  =$request->showabovehome;

        }else{
            $category->showabovehome  =0;
            
        }

        if(  $request->statusshowhome){
            $category->statusshowhome  =$request->statusshowhome;

        }else{
            $category->statusshowhome  =0;
        }

        if ($request->file('homeimage')) {
            $category->homeimage = $this->upload($request->file('homeimage'), 'category')->getFileName();
        } else {
            $category->homeimage = $category->homeimage;
        }
        if ($request->file('iconimage')) {
            $category->iconimage = $this->upload($request->file('iconimage'), 'category')->getFileName();
        } else {
            $category->iconimage = $category->iconimage;
        }
        if ($request->file('sidebarimage')) {
            $category->sidebarimage = $this->upload($request->file('sidebarimage'), 'category')->getFileName();
        } else {
            $category->sidebarimage = $category->sidebarimage;
        }
        if ($request->file('bannerimage')) {
            $category->bannerimage = $this->upload($request->file('bannerimage'), 'category')->getFileName();
        } else {
            $category->bannerimage = $category->bannerimage;
        }
        $category->update();
        return redirect()->route('categories')->with('message', 'Category successfully updated ');
    }

    public function destroy(Request $request)
    {
        $category=Category::find($request->category_id);
        $category->delete();
        return redirect()->back()->with('messagedelete', 'Category successfully deleted ');
    }
}
