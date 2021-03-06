@extends('layout')

@section('content')
    <h1>Liste de tous les jeux</h1>
    
    <section>
        {{ $games->links() }}
        @foreach( $games as $game )
            
            <article>
                <a href="{{ route('game.info', $game->id) }}">
                    <h2>{{ $game->title }}</h2>
                    <img src="{{ $game->image}}" alt="image de {{ $game->title }}"></img>
                </a>
                <span>{{ $game->mark }} / 10</span>
                <span>Date de sortie : {{ $game->release_date }}</span>
                
            </article>
            
        @endforeach
        {{ $games->links() }}
    </section>
    
    
@endsection