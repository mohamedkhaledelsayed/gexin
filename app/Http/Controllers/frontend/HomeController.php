<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Slider;
use App\LatestNew;
use App\PayMentGateWay;
use App\Video;
use App\Category;
use App\Category_Game;

class HomeController extends Controller
{
  
    public function index(Request $request )
    {
        $sliders=Slider::all();
        $latestnews=LatestNew::orderBy("id", "desc")->take(4)->get();
        foreach($latestnews as $latestnew){
            $latestnew->title=$latestnew->title;
            $latestnew->image=$latestnew->image;
            $latestnew->description= mb_substr($latestnew->description,0,70,'utf-8');
           
        }
  
        $videos=Video::orderBy("id", "desc")->take(4)->get();
        $categories=Category::where('showabovehome',1)->orderBy("id", "desc")->take(6)->get();


        $paymantgetways=PayMentGateWay::all();
      
        return view('frontend.home',compact('sliders','latestnews','videos','paymantgetways','categories'  ));
    }

    public function category(Request $request, $id)
    {
        $category =Category::find($id);
        $categories =Category::get();
       
        $games =Category_Game::join('games', 'category_game.game_id', '=', 'games.id')
        ->join('categories', 'category_game.category_id', '=', 'categories.id')
        ->where('category_id',$id)
        ->get();
        return View('frontend.categorygames',compact('categories','category','games'));

    }
}
