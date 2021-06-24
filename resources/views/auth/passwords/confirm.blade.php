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
			<h5 class="font-18 text-center">{{ __('Confirm Password') }}</h5>

			{{ __('Please confirm your password before continuing.') }}

			<form method="POST" action="{{ route('password.confirm') }}">
				@csrf

				<div class="form-group">
					<div class="col-md-12">
						<label for="password">{{ __('Password') }}</label>

						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-12">
						<button type="submit" class="btn btn-block btn-primary">
							{{ __('Confirm Password') }}
						</button>
					</div>
				</div>
				<div class="form-group mb-0 mt-2">
					<div class="col-md-12 text-center">
						@if (Route::has('password.request'))
						<a class="text-muted" href="{{ route('password.request') }}">
							{{ __('Forgot Your Password?') }}
						</a>
						@endif
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection