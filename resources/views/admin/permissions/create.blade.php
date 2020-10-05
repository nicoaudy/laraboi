@extends('laraboi.app')

@section('breadcrumb')
<x-breadcrumbs>
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('admin.permissions.index') }}">Permissions</a></li>
	<li class="breadcrumb-item active"><a href="#">Create Permission</a></li>
</x-breadcrumbs>
@endsection

@section('content')
<x-wrapper>
	@include('include.error-list')
	<x-slot name="headerLeft">Create form</x-slot>

	{!! Form::open([
	'route' => 'admin.permissions.store',
	'class' => 'form-horizontal',
	'files' => true,
	'onsubmit' => "submitButton.disabled = true",
	'role' => 'form'
	]) !!}

	@include('admin.permissions.form')

	{!! Form::close() !!}
</x-wrapper>
@endsection