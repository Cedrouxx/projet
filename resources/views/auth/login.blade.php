@extends('layout')

@section('content')    
    <h1>Login</h1>
    
    <form action="{{ route("auth.login.post") }}" method="post">
        @csrf
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <input type="submit" name="connexion">
    </form>
@endsection