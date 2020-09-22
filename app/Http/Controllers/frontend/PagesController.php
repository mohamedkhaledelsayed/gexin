<?php

namespace App\Http\Controllers\frontend;

use App\AboutUs;
use App\BlogDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LatestNew;
use App\PrivacyPolicy;
use App\UsagePolicy;
use App\Video;
use App\Game;
use App\Category;
use App\CategoryProduct;
use App\Product;
use App\Setting;

class PagesController extends Controller
{
    public function news()
    {
        $news = LatestNew::paginate();
        return view('frontend.news',compact('news'));
    }
    public function videos()
    {
        $videos = Video::paginate();
        return view('frontend.videos',compact('videos'));
    }
    
    public function privacypolicy()
    {
        $privacypolices = PrivacyPolicy::first();

        return view('frontend.privacypolicy',compact('privacypolices'));
    }
    public function usagepolicy()
    {
        $usagepolicy = UsagePolicy::first();

        return view('frontend.usagepolicy',compact('usagepolicy'));
    }
    public function aboutus()
    {
        $aboutus = AboutUs::first();

        return view('frontend.aboutus',compact('aboutus'));
    }
    public function newshow($id)
    {
        $newshow=LatestNew::find($id);
        $news=LatestNew::all();
        $sidebar=Setting::first();
        $latestnews =LatestNew::orderBy("id", "desc")->take(6)->get();
        $gamesbestseller=Game::where('best_seller',1)->orderBy("id", "desc")->take(2)->get();
        $productsbestseller=Product::where('best_seller',1)->orderBy("id", "desc")->take(2)->get();
        $categories=Category::orderBy("id", "desc")->take(6)->get();
        $categoriesproduct=CategoryProduct::orderBy("id", "desc")->take(6)->get();
        $games=Game::orderBy("id", "desc")->get();
        return view('frontend.blogdetails',compact('gamesbestseller','newshow','news','sidebar','latestnews','games','categories','categoriesproduct','productsbestseller'));

    }
    public function designonegames()
    {
      
        
        $category=Category::where('designs',1)->first();

        return view('frontend.designone',compact('category'));

    }
    public function designtwogames()
    {
      
        $category=Category::where('designs',2)->first();

        return view('frontend.designtwo',compact('category'));

    }
    public function designthreegames()
    {
      
      
        $category=Category::where('designs',3)->first();

        return view('frontend.designthree',compact('category'));

    }

 
    public function gameshow($id)
    {
        $game = Game::findOrfail($id);
        $sidebar=Setting::first();
        $latestnews =LatestNew::orderBy("id", "desc")->take(6)->get();
        $productsbestseller=Product::where('best_seller',1)->orderBy("id", "desc")->take(2)->get();
        $gamesbestseller=Game::where('best_seller',1)->orderBy("id", "desc")->take(2)->get();
        $categories=Category::orderBy("id", "desc")->take(6)->get();
        $categoriesproduct=CategoryProduct::orderBy("id", "desc")->take(6)->get();
        $games=Game::orderBy("id", "desc")->get();
        return view('frontend.gamedetails',compact('productsbestseller','gamesbestseller','game','sidebar','latestnews','game','games','categories','categoriesproduct'));

    }
}
