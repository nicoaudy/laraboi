@extends('laraboi.app')

@section('content')
	<div class="nk-block-head">
		<div class="nk-block-head-sub">
			<a class="back-to" href="{{ route('admin.users.index') }}"><em class="icon ni ni-arrow-left"></em><span>User Lists</span></a>
		</div>
	</div>
	<div class="nk-block nk-block-lg">
		<div class="card card-bordered">
			<div class="card-inner">
				@include('include.error-list')

				{{ Form::model($user, [
					'route' => [ 'admin.users.update', $user->id ],
					'method' => 'PUT',
					'files' => true ,
					'class' => 'form-horizontal',
					'onsubmit' => "submitButton.disabled = true"
				]) }}

				@include('admin.users.form')

				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection