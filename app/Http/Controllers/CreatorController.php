<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Studio;
use App\Models\Game;

class CreatorController extends Controller
{
    public function game(){
        
        $studios = Studio::get();
        
        return view('creator.game', [ 'studios' => $studios ]);
        
    }
    
    public function gamePost(Request $request){
        
        $request->validate([
            'title' => 'required|unique:games',
            'mark' => 'required|integer',
            'image' => 'required',
            'price' => 'required|numeric',
            'release_date' => 'required|date',
            'description' => 'required',
            'studio_id' => 'required|exists:studios,id'
        ]);
        
        $game = new Game();
        $game->title = $request->input('title');
        $game->mark = $request->input('mark');
        $game->image = $request->input('image');
        $game->description = $request->input('description');
        $game->price = $request->input('price');
        $game->release_date = $request->input('release_date');
        $game->studio_id = $request->input('studio_id');
        $game->save();
        
        return redirect()->route('game.list');
        
    }
}
