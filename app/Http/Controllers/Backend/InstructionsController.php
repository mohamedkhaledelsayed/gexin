<?php

namespace App\Http\Controllers\Backend;

use App\Game;
use App\Http\Controllers\Controller;
use App\Instructions;
use Illuminate\Http\Request;
use App\Traits\CanUpload;
use Facade\FlareClient\View;

class InstructionsController extends Controller
{
    use CanUpload;
    public function __construct()

    {

        $this->middleware('auth:admin');

    }
    public function index()
    {

        $instructions=Instructions::all();
        return View('backend.pages.instructions.index',compact('instructions'));
    }
    public function instructions()
    {   $instructions =Instructions::first();
        $games=Game::all();
        return View('backend.pages.instructions.create',compact('games','instructions'));
    }
    public function instructionstore(Request $request)
    {
        $instructionsgame= new Instructions();
        $instructionsgame->title = $request->title;
        $instructionsgame->description=$request->description;
        $instructionsgame->game_id=$request->game_id;
        if ($request->file('image')) {
            $instructionsgame->image = $this->upload($request->file('image'), 'instructions')->getFileName();
        }
        $instructionsgame->save();
        return redirect()->route('instructions')->with('message', 'Instructions successfully inserted ');

    }
    public function edit($id)
    {
        $instructions=Instructions::find($id);
        $games=Game::all();

        return view('backend.pages.instructions.edit',compact('instructions','games'));
    }
    public function update(Request $request, $id)
    {
        $instructionsgame=instructions::find($id);
        $instructionsgame->title = $request->title;
        $instructionsgame->description=$request->description;
        $instructionsgame->game_id=$request->game_id;
        if ($request->file('image')) {
            $instructionsgame->image = $this->upload($request->file('image'), 'instructions')->getFileName();
        }
        $instructionsgame->save();
        return redirect()->route('instructions')->with('message', 'instructions successfully updated ');
    }

    public function destroy(Request $request)
    {
     
        $instructions=Instructions::find($request->instructions_id);
        $instructions->delete();
        return redirect()->back()->with('messagedelete', 'Instructions successfully deleted ');
    }
}
