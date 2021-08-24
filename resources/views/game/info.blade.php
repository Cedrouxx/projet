@extends('layout')

@section('content')
    <h1>Liste de tous les jeux</h1>
    
    <section>
        <article>
            <h1>{{ $game->title }}</h1>
            <img src="{{ $game->image }}">
            <p>Sortie le: {{ $game->release_date }}, nous avons mis le note de {{ $game->mark }} / 10</p>
        </article>
        <article>
            <h2>Description</h2>
            <p>{{ $game->description }}</p>
        </article>
        <article>
            <h2>Commentaires</h2>
            <section>
                @auth
                    <form method="post" action="{{ route('game.info.post', $game->id) }}">
                        @csrf
                        @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div>
                            <label for="mark">Note</label>
                            <input type="number" name="mark" id="mark" min="0" max="10"/>
                        </div>
                        <div>
                            <label for="content">Contenue</label>
                            <textarea name="content" id="content" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" value="Submit"/>
                    </form>
                @endauth
                @foreach( $ratings as $rating)
                    <article>
                        <h3>{{ $rating->mark }}/10 {{ $rating->user->username }}</h3>
                        <p>{{ $rating->content }}</p>
                        <small>Posté le {{ $rating->created_at }}</small>    
                    </article>
                @endforeach
            </section>
        </article>
    </section>
    
    
@endsection