@extends('laraboi.app')

@section('before-content')
<x-page-title title="Users">
	<ol class="breadcrumb float-right">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
		<li class="breadcrumb-item active">Create User</li>
	</ol>
</x-page-title>
@endsection

@section('content')
<x-wrapper>
	@include('include.error-list')
	<x-slot name="header">Create form</x-slot>

	{!! Form::open([
	'route' => 'admin.users.store',
	'class' => 'form-horizontal',
	'files' => true,
	'onsubmit' => "submitButton.disabled = true"
	]) !!}

	@include('admin.users.form')

	{!! Form::close() !!}
</x-wrapper>
@endsection