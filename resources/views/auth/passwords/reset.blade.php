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
			<h5 class="font-18 text-center">{{ __('Reset Password') }}</h5>
			<form class="form-horizontal m-t-30" action="{{ route('password.update') }}" method="POST">
				@csrf

				<div class="form-group">
					<div class="col-md-12">
						<label>{{ __('E-Mail Address') }}</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<label for="password">{{ __('Password') }}</label>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-12">
						<label for="password-confirm">{{ __('Confirm Password') }}</label>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					</div>
				</div>
				<div class="form-group mb-0">
					<div class="col-md-12">
						<button type="submit" class="btn btn-block btn-primary">
							{{ __('Reset Password') }}
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection