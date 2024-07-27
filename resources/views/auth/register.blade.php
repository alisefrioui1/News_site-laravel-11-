

@extends('auth.auth-layout')
@section('title','register')

@section('auth_form')

<h1 class="mb-3">Register</h1>
<form method="POST" action="{{ route('register') }}" >
    @csrf
    <div class="form-group">
        <input class="form-control" name="name" type="text" placeholder="Username"> 
    </div>
   
    <div class="form-group">
        <input class="form-control" type="email" name="email" placeholder="Email"> 
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="password" placeholder="Password"> </div>
    <div class="form-group">
        <input class="form-control" type="text"  name="password_confirmation" placeholder="Confirme password"> </div>
    <div class="form-group mb-0">
        <button class="btn btn-primary btn-block" type="submit">Register</button>
    </div>
</form>

<div class="text-center dont-have">already have an account? <a href="{{ route('login') }}">Login</a> </div>
@endsection
    
