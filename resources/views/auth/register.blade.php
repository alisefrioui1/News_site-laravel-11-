

@extends('auth.auth-layout')
@section('title','register')

@section('auth_form')

<h1 class="mb-3">Register</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" value="{{ old('name') }}" placeholder="Username">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
        @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Confirm Password">
        @error('password_confirmation')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="form-group mb-0">
        <button class="btn btn-primary btn-block" type="submit">Register</button>
    </div>
</form>


<div class="text-center dont-have">already have an account? <a href="{{ route('login') }}">Login</a> </div>
@endsection
    
