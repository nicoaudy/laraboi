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
			<h5 class="font-18 text-center">{{ __('Verify Your Email Address') }}</h5>

			@if (session('resent'))
			<div class="alert alert-success" role="alert">
				{{ __('A fresh verification link has been sent to your email address.') }}
			</div>
			@endif

			{{ __('Before proceeding, please check your email for a verification link.') }}
			{{ __('If you did not receive the email') }},
			<form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
				@csrf
				<button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
			</form>
		</div>
	</div>
</div>
@endsection