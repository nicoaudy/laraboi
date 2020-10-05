@extends('laraboi.app')

@section('content')
<div class="card-body">
	<div class="row">
		<div class="col-lg-12">
			@include('flash::message')
			<div class="card card-transparent">
				<div class="card-body no-padding">
					<div id="card-advance" class="card card-default">
						<div class="card-header  ">
							<div class="card-title">Roles</div>
							<div class="card-controls">
								<ul>
									<li>
										<div class="dropdown">
											<a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
												<i class="card-icon card-icon-settings"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="card-settings">
												<a href="{{ route('admin.roles.create') }}" class="dropdown-item">Create new</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<div class="card card-transparent">
								<div class="card-body">
									<div class="table-responsive">
										{!! $dataTable->table(['class' => 'table table-hover']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@push('javascript')
@include('shared.wrapperDatatable')
@endpush