


@extends('auth.auth-layout')
@section('title','login')
@section('auth_form')
<h1>LOGIN</h1>
							<p class="account-subtitle">login to dashboard</p>
							<form method="POST" action="{{ route('login') }}">
								@csrf
							
								<div class="form-group">
									<input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
									@error('email')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							
								<div class="form-group">
									<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Mot de passe">
									@error('password')
										<div class="invalid-feedback">
											{{ $message }}
										</div>
									@enderror
								</div>
							
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							
							<div class="text-center forgotpass"><a href="{{route("password.request")}}">Forget password?</a> </div>
							
							<div class="text-center dont-have">if you don't have an account  <a href="{{ route('register') }}">regester</a></div>
@endsection