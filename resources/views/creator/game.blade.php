@extends('layout')

@section('content')
    <h1>Création d'un jeux vidéo</h1>
    
    <form action="{{ route('creator.game.post') }}" method="post">
        @csrf
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div>
            <label for="title">Titre du jeu</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="mark">Note</label>
            <input type="number" id="mark" name="mark" min="0" max="10">
        </div>
        <div>
            <label for="image">Lien d'une image</label>
            <input type="text" id="image" name="image">
        </div>
        <div>
            <label for="price">Prix en Euro</label>
            <input type="text" id="price" name="price">
        </div>
        <div>
            <label for="release_date">Date de sortie</label>
            <input type="text" id="release_date" name="release_date">
        </div>
        <div>
            <label for="studio_id">Studio</label>
            <select name="studio_id" id="studio_id">
                <option value="">--Please choose an option--</option>
                @foreach( $studios as $studio)
                    <option value="{{ $studio->id }}">{{ $studio->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description"></textarea>
        </div>
        <input type="submit" name="connexion">
    </form>
    
    
@endsection