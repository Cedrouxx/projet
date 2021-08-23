<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

use App\Models\Game;

class GameController extends Controller
{
    public function list(){
        
        Paginator::useBootstrap();
        $games = Game::orderBy('release_date', 'DESC')->paginate(5);
        
        return view('game.list', [ 'games' => $games ]);
        
    }
}
