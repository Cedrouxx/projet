@extends('layout')

@section('content')
    <h1>Création d'un studio</h1>
    
    <form action="{{ route('creator.studio.post') }}" method="post">
        @csrf
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div>
            <label for="name">Nom du studio</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="logo">Lien du logo</label>
            <input type="text" id="logo" name="logo">
        </div>
        <input type="submit" name="connexion">
    </form>
    
    
@endsection