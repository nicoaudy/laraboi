@extends('laraboi.app')

@section('breadcrumb')
<x-breadcrumbs>
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item active"><a href="#">Impersonate</a></li>
</x-breadcrumbs>
@endsection

@section('content')
<x-wrapper>
	<x-slot name="headerLeft">Impersonate</x-slot>

	<div class="table-responsive">
		{!! $dataTable->table(['class' => 'table table-hover']) !!}
	</div>
</x-wrapper>
@endsection

@push('javascript')
@include('shared.wrapperDatatable')
@endpush