@extends("auth.auth-layout")
@section("title","forget password")

@section('auth_form')
    
<h1>Mot de passe oublie?</h1>
<p class="account-subtitle">Entrer votre email pour obtenier le lien de reunitialisation</p>
@if (session('status'))
    
    <div class="alert alert-success">{{session('status')}} </div>
@endif
<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="form-group">
        <input class="form-control" type="email" value="{{old('email')}}" name="email" placeholder="Email"> </div>
    <div class="form-group mb-0">
        <button class="btn btn-primary btn-block" type="submit">Recevoir le lien</button>
    </div>
</form>
<div class="text-center dont-have">Vous vous souvenez de votre mot de passe? <a href="{{route("login")}}">Se connecter</a></div>
@endsection



