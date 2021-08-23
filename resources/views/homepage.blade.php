@extends('layout')

@section('content')

    <h1>Page d'accueil du site</h1>
    
    
        <h2>Projet-game</h2>
        
        <P>les 5 dernières sorties</P>
    @foreach($games as $game)
        <article>
            <h2>{{ $game->title }}</h2>
            <img src="{{ $game->image }}">
            <p>{!! nl2br(e(substr($game->description, 0, 50))) !!}[...]()</p>
            <p>note : {{ $game->mark }} / 20</p>
        </article>
    @endforeach
        <P>les 5 jeux les mieux notés</P>
          @foreach($gamesByNote as $game)
        <article>
            <h2>{{ $game->title }}</h2>
            <img src="{{ $game->image }}">
            <p>{!! nl2br(e(substr($game->description, 0, 50))) !!}[...]()</p>
            <p>note : {{ $game->mark }} / 20</p>
        </article>
    @endforeach
      
   
    
    
@endsection

@section('title', 'Accueil')