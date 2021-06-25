@extends('laraboi.app')

@section('before-content')
<x-page-title title="Roles">
	<ol class="breadcrumb float-right">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Roles</a></li>
		<li class="breadcrumb-item active">Create Role</li>
	</ol>
</x-page-title>
@endsection

@section('content')
<x-wrapper>
	<x-errors />
	<x-slot name="header">Create Form</x-slot>

	{!! Form::open([
	'route' => 'admin.roles.store',
	'class' => 'form-horizontal',
	'files' => true,
	'onsubmit' => "submitButton.disabled = true",
	'role' => 'form'
	]) !!}

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