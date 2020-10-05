@extends('laraboi.app')

@section('breadcrumb')
<x-breadcrumbs>
	<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
	<li class="breadcrumb-item active"><a href="#">Permissions</a></li>
</x-breadcrumbs>
@endsection

@section('content')
<x-wrapper>
	<x-slot name="headerLeft">Permissions</x-slot>
	<x-slot name="headerRight">
		<ul>
			<li>
				<div class="dropdown">
					<a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
						<i class="card-icon card-icon-settings"></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="card-settings">
						<a href="{{ route('admin.permissions.create') }}" class="dropdown-item">Create new</a>
					</div>
				</div>
			</li>
		</ul>
	</x-slot>

	<div class="table-responsive">
		{!! $dataTable->table(['class' => 'table table-bordered table-hover table-stripped']) !!}
	</div>
</x-wrapper>
@endsection

@push('javascript')
@include('shared.wrapperDatatable')
@endpush