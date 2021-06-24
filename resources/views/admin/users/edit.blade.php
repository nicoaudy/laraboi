@extends('laraboi.app')

@section('before-content')
<x-page-title title="Users">
	<ol class="breadcrumb float-right">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
		<li class="breadcrumb-item active">Edit User</li>
	</ol>
</x-page-title>
@endsection

@section('content')
<x-wrapper>
	@include('include.error-list')
	<x-slot name="header">Edit User</x-slot>

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