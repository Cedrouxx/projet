@extends('layout')

@section('content')   
<h1>Register</h1>

<form action="{{ route("Auth.register.post") }}" method="post">
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
        <label for="emain">Addresse mail</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password">
    </div>
    <div>
        <label for="password-confirmation">Confirmation de mot de passe</label>
        <input type="password" id="password-confirmation" name="password_confirmation">
    </div>
    <div>
        <input type="submit" name="Envoyer"/>
    </div>
</form>
@endsection