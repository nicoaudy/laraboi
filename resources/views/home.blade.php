@extends('laraboi.app')

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
<div class="card card-bordered">
	<div class="card-inner card-inner-md">
		<div class="card-title-group">
			<h6 class="card-title">User Activity</h6>
			<div class="card-action">
				<a href="{{ route('admin.users.index') }}" class="link link-sm">See All <em class="icon ni ni-chevron-right"></em></a>
			</div>
		</div>
	</div>
	<table class="table table-tranx">
		<thead>
			<tr class="tb-tnx-head">
				<th class="tb-tnx-id"><span class="">#</span></th>
				<th class="tb-tnx-info">
					<span class="tb-tnx-desc d-none d-sm-inline-block">
						<span>Email</span>
					</span>
					<span class="tb-tnx-date d-md-inline-block d-none">
						<span class="d-md-none">Activity</span>
						<span class="d-none d-md-block">
							<span>Created At</span>
							<span>Last Logged In</span>
						</span>
					</span>
				</th>
				<th class="tb-tnx-amount">
					<span class="tb-tnx-status d-none d-md-inline-block">Status</span>
				</th>
		</thead>
		<tbody>
			@foreach($users as $log)
			<tr class="tb-tnx-item">
				<td class="tb-tnx-id">
					<a href="{{ route('admin.users.show', $log->id) }}"><span>{{ $log->id }}</span></a>
				</td>
				<td class="tb-tnx-info">
					<div class="tb-tnx-desc">
						<span class="title">{{ $log->username }}</span>
					</div>
					<div class="tb-tnx-date">
						<span class="date">{{ $log->created_at }}</span>
						<span class="date">{{ \Carbon\Carbon::parse($log->last_login)->diffForHumans() }}</span>
					</div>
				</td>
				<td class="tb-tnx-amount">
					<div class="tb-tnx-status">
						<span class="badge badge-dot badge-{{ $log->active ? 'success' : 'warning' }}">{{ $log->active ? 'Active' : 'Inactive' }}</span>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection