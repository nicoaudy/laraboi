@extends('laraboi.app')

@section('before-content')
<x-page-title title="Permissions">
	<ol class="breadcrumb float-right">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.permissions.index') }}">Permissions</a></li>
		<li class="breadcrumb-item active">Create Permission</li>
	</ol>
</x-page-title>
@endsection

@section('content')
<x-wrapper>
	<x-errors />
	<x-slot name="header">Create Form</x-slot>

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