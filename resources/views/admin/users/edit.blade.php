@extends('laraboi.app')

@section('breadcrumb')
<x-breadcrumbs>
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
	<li class="breadcrumb-item active"><a href="#">Edit User</a></li>
</x-breadcrumbs>
@endsection

@section('content')
<x-wrapper>
	@include('include.error-list')
	<x-slot name="headerLeft">Edit form</x-slot>

	{{ Form::model($user, [
					'route' => [ 'admin.users.update', $user->id ],
					'method' => 'PUT',
					'files' => true ,
					'class' => 'form-horizontal',
					'onsubmit' => "submitButton.disabled = true"
				]) }}

	@include('admin.users.form')

	{!! Form::close() !!}
</x-wrapper>
@endsection