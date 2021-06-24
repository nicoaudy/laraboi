@extends('laraboi.app')

@section('before-content')
<x-page-title title="Roles">
	<ol class="breadcrumb float-right">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Roles</a></li>
		<li class="breadcrumb-item active">Edit Role</li>
	</ol>
</x-page-title>
@endsection

@section('content')
<x-wrapper>
	@include('include.error-list')
	<x-slot name="header">Edit Form</x-slot>

	{{ Form::model($role, [
		'route' => [ 'admin.roles.update', $role->id ],
		'method' => 'PUT',
		'files' => true ,
		'class' => 'form-horizontal',
		'onsubmit' => "submitButton.disabled = true",
		'role' => 'form'
	]) }}

	@include('admin.roles.form')

	{!! Form::close() !!}
</x-wrapper>
@endsection

@push('javascript')
<script>
	$('#select-all').click(function(event) {
		if (this.checked) {
			$(':checkbox').each(function() {
				this.checked = true;
			});
		} else {
			$(':checkbox').each(function() {
				this.checked = false;
			});
		}
	});
</script>
@endpush