@extends('laraboi.app')

@section('before-content')
<x-page-title title="Roles">
	<ol class="breadcrumb float-right">
		<li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
		<li class="breadcrumb-item active">Roles</li>
	</ol>
</x-page-title>
@endsection

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">
				<div class="mb-4 header-title pull-right text-right">
					<a href="{{ route('admin.roles.create') }}" class="btn btn-primary">New Role</a>
			    </div>

				<div class="table-responsive">
					{!! $dataTable->table(['class' => 'table table-hover']) !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('javascript')
@include('shared.wrapperDatatable')
@endpush