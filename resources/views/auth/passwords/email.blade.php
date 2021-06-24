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

			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			@endif

			<form method="POST" action="{{ route('password.email') }}">
				@csrf

				<div class="form-group">
					<div class="col-md-12">
						<label for="email">{{ __('E-Mail Address') }}</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>
				</div>

				<div class="form-group mb-0">
					<div class="col-md-12">
						<button type="submit" class="btn btn-block btn-primary">
							{{ __('Send Password Reset Link') }}
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection