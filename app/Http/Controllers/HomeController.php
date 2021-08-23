<?php

namespace App\Http\Controllers;


use App\Models\Game;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
       
        $games = Game::orderBy('release_date')->take(5)->get();
         $gamesByNote = Game::orderBy('mark')->take(5)->get();
        
        
        // $comments = DB::table('comments', 'c')
        //     ->select('c.id', 'c.pseudo', 'c.content', 'p.title')
        //     ->orderBy('c.created_at', 'desc')
        //     ->where('c.post_id', 1)
        //     ->join('posts AS p', 'p.id', '=', 'c.post_id')
        //     ->limit(5)
        //     ->get();
        
        return view('homepage', [
            'games' => $games,
            'gamesByNote'=> $gamesByNote,
            
        ]);
    }
}