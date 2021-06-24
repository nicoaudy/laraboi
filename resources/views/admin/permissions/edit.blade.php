@extends('laraboi.app')

@section('before-content')
<x-page-title title="Permissions">
	<ol class="breadcrumb float-right">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.permissions.index') }}">Permissions</a></li>
		<li class="breadcrumb-item active">Edit Permission</li>
	</ol>
</x-page-title>
@endsection

@section('content')
<x-wrapper>
	@include('include.error-list')
	<x-slot name="header">Edit Form</x-slot>

	{{ Form::model($permission, [
		'route' => [ 'admin.permissions.update', $permission->id ],
		'method' => 'PUT',
		'files' => true ,
		'class' => 'form-horizontal',
		'onsubmit' => "submitButton.disabled = true"
	]) }}

	@include('admin.permissions.form')

	{!! Form::close() !!}
</x-wrapper>
@endsection