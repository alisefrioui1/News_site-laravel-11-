


@extends('auth.auth-layout')
@section('title','login')
@section('auth_form')
<h1>LOGIN</h1>
							<p class="account-subtitle">login to dashboard</p>
							<form method="POST" action="{{ route('login') }}">
                                @csrf

								<div class="form-group">
									<input class="form-control" type="text" name="email" placeholder="Email"> </div>
								<div class="form-group">
									<input class="form-control" type="password" name="password" placeholder="Mot de passe"> </div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							<div class="text-center forgotpass"><a href="forgot-password.html">Forget password?</a> </div>
							
							<div class="text-center dont-have">if you don't have an account  <a href="{{ route('register') }}">regester</a></div>
@endsection