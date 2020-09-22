<?php


namespace App\Http\Controllers\Backend;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\backend\GameRequest;
use App\Http\Requests\backend\UpdateGameRequest;
use App\Game;
use App\Traits\CanUpload;

class GamesController extends Controller
{
        
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {
       $games=Game::all(); 
       return view("backend.pages.games.index",compact('games'));
    }
    public function game()
    {
       $game =Game::first(); 
       $categories=Category::all();
       return view("backend.pages.games.create",compact('game','categories'));
    }
    public function gamestore(GameRequest $request)
    {
        $game = new Game;
        $game->title=request('title');
        $game->link=request('link');
        $game->description=request('description');
        $game->terms_conditions	=request('termsconditions');
        $game->price=request('price');
        $game->offer_price=request('discount');
        $game->percentage=(request('discount'))*100/(request('price'));

        if ($request->file('image')) {
            $game->image = $this->upload($request->file('image'), 'games')->getFileName();
        } else {
            $game->image = $game->image;
        }
        if ($request->file('bannerimage')) {
            $game->bannerimage = $this->upload($request->file('bannerimage'), 'games')->getFileName();
        } else {
            $game->bannerimage = $game->bannerimage;
        }
        if ($request->bestseller ==1 ){
            $game->best_seller=1;
        }
        if($request->showhomepage){
            $game->showhomepage  =$request->showhomepage;

        }
        $game->save();

        if (request('category'))
        foreach(request('category') as $category)
        {
            $game->categories()->attach($category);
        }

       


        return redirect()->route('gamepage')->with('message', 'Game successfully inserted ');
        
    }
    public function edit($id)
    {
        $gameCetagoryIds = [];
        $game=Game::find($id);
        $categories=Category::all();
        foreach($game->categories as $gameCetagory)
        {
            $gameCetagoryIds[] = $gameCetagory->id;
        }    

        return view('backend.pages.games.edit',compact('game','categories','gameCetagoryIds'));
    }
    public function update(UpdateGameRequest $request, $id)
    {
        $game=Game::find($id);
        $game->title=request('title');
        $game->link=request('link');
        $game->description=request('description');
        $game->terms_conditions	=request('termsconditions');
        $game->price=request('price');
        $game->offer_price=request('discount');
        $game->percentage=(request('discount'))*100/(request('price'));

        if ($request->file('image')) {
            $game->image = $this->upload($request->file('image'), 'games')->getFileName();
        } else {
            $game->image = $game->image;
        }
        if ($request->file('bannerimage')) {
            $game->bannerimage = $this->upload($request->file('bannerimage'), 'games')->getFileName();
        } else {
            $game->bannerimage = $game->bannerimage;
        }
        
            
        if(  $request->bestseller){
            $game->best_seller  =$request->bestseller;

        }else{
            $game->best_seller  =0;
        }
        if(  $request->showhomepage){
            $game->showhomepage  =$request->showhomepage;

        }else{
            $game->showhomepage  =0;
        }
        $game->update();

        
        foreach(request('category') as $category)
        {
            $game->categories()->sync(request('category'));
        }

        

        return redirect()->route('gamepage')->with('message', 'Game successfully updated ');
    }

    public function show($id)
    {
        $game=Game::find($id);
        $category =Category::find($id);
        $categories =Category::get();

        return view('backend.pages.games.games',compact('game','category','categories'));
    }

    public function destroy(Request $request)
    {
        $game=Game::find($request->game_id);
        $game->delete();
        return redirect()->back()->with('messagedelete', 'Game successfully deleted ');
    }
}
