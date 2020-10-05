@extends('laraboi.app')

@section('breadcrumb')
<x-breadcrumbs>
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item"><a href="{{ route('admin.permissions.index') }}">Permissions</a></li>
	<li class="breadcrumb-item active"><a href="#">Edit Permission</a></li>
</x-breadcrumbs>
@endsection

@section('content')
<x-wrapper>
	@include('include.error-list')
	<x-slot name="headerLeft">Edit form</x-slot>

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