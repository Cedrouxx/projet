<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Game;
use App\Models\Rating;

class GameController extends Controller
{
    public function list(){
        
        Paginator::useBootstrap();
        $games = Game::orderBy('release_date', 'DESC')->paginate(5);
        
        return view('game.list', [ 'games' => $games ]);
        
    }
    
    public function info(int $id){
        
        $game = Game::with('studio', 'platform')->where('id', $id)->first();
        $ratings = Rating::with('user')->where('game_id', $id)->orderBy('created_at', 'DESC')->get();
        
        return view('game.info', [ 
            'game' => $game ,
            'ratings' => $ratings
        ]);
        
    }
    
    public function infoPost(Request $request, int $id){
        
        $request->validate([
            'mark' => 'required|min:0|max:10|integer',
            'content' => 'required|min:5'
        ]);
        
        $rating = new Rating();
        $rating->game_id = $id;
        $rating->user_id = Auth::user()->id;
        $rating->mark = $request->input('mark');
        $rating->content = $request->input('content');
        $rating->save();
        
        return redirect()->route('game.info', $id);
        
    }
}
