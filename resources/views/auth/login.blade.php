@extends('layouts.app')

@section('content')
<div class="accountbg"></div>
<div class="home-btn d-none d-sm-block">
	<a href="{{ route('home') }}" class="text-white"><i class="fas fa-home h2"></i></a>
</div>
<div class="wrapper-page">
	<div class="card card-pages shadow-none">

		<div class="card-body">
			<div class="text-center m-t-0 m-b-15">
				<a href="{{ route('home') }}" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
			</div>
			<h5 class="font-18 text-center">Sign in to continue to {{ env('APP_NAME') }}.</h5>

			<form class="form-horizontal m-t-30" action="{{ route('login') }}" method="POST">
				@csrf
				<div class="form-group">
					<div class="col-12">
						<label>Email or Username</label>
						<input type="text" class="form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" autocomplete="email" autofocus>

						@error('login')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<div class="col-12">
						<label>Password</label>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<div class="col-12">
						<div class="checkbox checkbox-primary">
							<div class="custom-control custom-checkbox">
								<input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

								<label class="custom-control-label"> Remember me</label>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group text-center m-t-20">
					<div class="col-12">
						<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
					</div>
				</div>

				<div class="form-group row m-t-30 m-b-0">
					<div class="col-sm-7">
						@if (Route::has('password.request'))
						<a class="text-muted" href="{{ route('password.request') }}">
							<i class="fa fa-lock m-r-5"></i> {{ __('Forgot Your Password?') }}
						</a>
						@endif
					</div>
					<div class="col-sm-5 text-right">
						<a class="text-muted" href="{{ route('register') }}">
							{{ __('Create an account') }}
						</a>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>
@endsection