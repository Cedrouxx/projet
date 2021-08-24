<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Studio;
use App\Models\Game;
use App\Models\User;
use App\Models\Platform;
use App\Models\Category;

class CreatorController extends Controller
{
    public function game(){
        
        if (empty(Auth::user()['is_admin']))
            return redirect()->intended(route('homepage'));
        
        $studios = Studio::get();
        $platforms = Platform::get();
        
        return view('creator.game', [ 
            'studios' => $studios ,
            'platforms' => $platforms
        ]);
        
    }
    
    public function gamePost(Request $request){
        
        if (empty(Auth::user()['is_admin']))
            return redirect()->intended(route('homepage'));
        
        $request->validate([
            'title' => 'required|unique:games',
            'mark' => 'required|integer',
            'image' => 'required',
            'price' => 'required|numeric',
            'release_date' => 'required|date',
            'description' => 'required',
            'studio_id' => 'required|exists:studios,id',
            'platform' => 'required'
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
        $game->platform()->attach($request->input('platform'));
        
        return redirect()->route('game.list');
        
    }
    
    public function studio(){
        
        if (empty(Auth::user()['is_admin']))
            return redirect()->intended(route('homepage'));
        
        $studios = Studio::get();
        
        return view('creator.studio');
        
    }
    
    public function studioPost(Request $request){
        
        if (empty(Auth::user()['is_admin']))
            return redirect()->intended(route('homepage'));
        
        $request->validate([
            'name' => 'required|unique:studios',
            'logo' => 'required',
        ]);
        
        $studio = new Studio();
        $studio->name = $request->input('name');
        $studio->logo = $request->input('logo');
        $studio->save();
        
        return redirect()->route('homepage');
        
    }
    
    public function platform(){
        
        if (empty(Auth::user()['is_admin']))
            return redirect()->intended(route('homepage'));
        
        $studios = Studio::get();
        
        return view('creator.platform');
        
    }
    
    public function platformPost(Request $request){
        
        if (empty(Auth::user()['is_admin']))
            // return redirect()->intended(route('homepage'));
            dd("ok");
        
        $request->validate([
            'name' => 'required|unique:platforms',
            'logo' => 'required',
        ]);
        
        $platform = new Platform();
        $platform->name = $request->input('name');
        $platform->logo = $request->input('logo');
        $platform->save();
        
        return redirect()->route('homepage');
        
    }
    
    public function category(){
        
        if (empty(Auth::user()['is_admin']))
            return redirect()->intended(route('homepage'));
        
        $studios = Studio::get();
        
        return view('creator.category');
        
    }
    
    public function categoryPost(Request $request){
        
        if (empty(Auth::user()['is_admin']))
            // return redirect()->intended(route('homepage'));
            dd("ok");
        
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
        
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        
        return redirect()->route('homepage');
        
    }
}
