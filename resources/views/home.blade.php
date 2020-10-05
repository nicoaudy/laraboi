@extends('laraboi.app')

@section('breadcrumb')
<x-breadcrumbs>
	<li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard Page</a></li>
</x-breadcrumbs>
@endsection

@section('content')
<div class="card card-transparent">
	<div class="card-header  ">
		<div class="card-title">Dashboard</div>
	</div>
	<div class="m-0 row card-body">
		<div class="col-lg-4 no-padding">
			<div class="p-r-30">
				<h3 class="mb-4">Effortless Customization</h3>
				<p>
					Cards are pluggable UI components that are managed and displayed in a web portal. Cards in
					Pages are created by reusing the <a href="http://getbootstrap.com/components/#cards">cards</a> introduced in Bootstrap to enable effortless customization.
				</p>
			</div>
		</div>
		<div class="col-lg-8 sm-no-padding">
			<div class="card card-transparent">
				<div class="card-body no-padding">
					<div id="card-advance" class="card card-default">
						<div class="card-header  ">
							<div class="card-title">Portlet Title
							</div>
							<div class="card-controls">
								<ul>
									<li>
										<div class="dropdown">
											<a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
												<i class="card-icon card-icon-settings "></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="card-settings">
												<a href="#" class="dropdown-item">API</a>
												<a href="#" class="dropdown-item">Preferences</a>
												<a href="#" class="dropdown-item">About</a>
											</div>
										</div>
									</li>
									<li>
										<a href="#" class="card-collapse" data-toggle="collapse"><i class="card-icon card-icon-collapse"></i></a>
									</li>
									<li>
										<a href="#" class="card-refresh" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
									</li>
									<li>
										<a href="#" class="card-maximize" data-toggle="maximize"><i class="card-icon card-icon-maximize"></i></a>
									</li>
									<li>
										<a href="#" class="card-close" data-toggle="close"><i class="card-icon card-icon-close"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<h3>
								<span class="semi-bold">Advance</span> Tools</h3>
							<p>We have crafted Pages Cards to suit any use case. Add a maximize button <i class="pg-fullscreen"></i> into your Cards controls bar to make the Cards go full-screen. This will come handy if you want to show lot of content inside a Cards and want to give the content some room to breath</p>
							<br>
							<div>
								<div class="profile-img-wrapper m-t-5 inline">
									<img width="35" height="35" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar_small.jpg" alt="" src="assets/img/profiles/avatar_small2x.jpg">
									<div class="chat-status available">
									</div>
								</div>
								<div class="inline m-l-10">
									<p class="small hint-text m-t-5">NicoAudy
										<br>Fullsnack Developer 🌭</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<x-wrapper>
	<x-slot name="headerLeft">User Activity</x-slot>
	<x-slot name="headerRight">
		<ul>
			<li>
				<div class="dropdown">
					<a id="card-settings" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
						<i class="card-icon card-icon-settings "></i>
					</a>
					<div class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="card-settings">
						<a href="{{ route('admin.users.index') }}" class="dropdown-item">See All</a>
					</div>
				</div>
			</li>
		</ul>
	</x-slot>

	<div class="table-responsive">
		<table class="table table-hover table-condensed" id="condensedTable">
			<thead>
				<tr>
					<th>Email</th>
					<th>Created At</th>
					<th>Last Logged In</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $log)
				<tr>
					<td>
						<a href="{{ route('admin.users.show', $log->id) }}">{{ $log->email }}</a>

					</td>
					<td>{{ $log->created_at }}</td>
					<td>{{ \Carbon\Carbon::parse($log->last_login)->diffForHumans() }}</td>
					<td>
						<span class="badge badge-dot badge-{{ $log->active ? 'success' : 'warning' }}">{{ $log->active ? 'Active' : 'Inactive' }}</span>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</x-wrapper>
@endsection