@extends('layout')

@section('content')
    <h1>Création d'une categorie</h1>
    
    <form action="{{ route('creator.category.post') }}" method="post">
        @csrf
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div>
            <label for="name">Nom de la categorie</label>
            <input type="text" id="name" name="name">
        </div>
        <input type="submit" name="connexion">
    </form>
    
    
@endsection