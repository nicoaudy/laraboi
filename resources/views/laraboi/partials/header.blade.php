<div class="header p-r-0 bg-primary">
	<div class="header-inner header-md-height">
		<a href="#" class="btn-link toggle-sidebar d-lg-none text-white sm-p-l-0 btn-icon-link" data-toggle="horizontal-menu">
			<i class="pg-icon">menu</i>
		</a>
		<div class="">
			<div class="brand inline no-border d-sm-inline-block">
				<img src="{{ asset('images/logo.png') }}" alt="logo" data-src="{{ asset('images/logo.png') }}" data-src-retina="{{ asset('images/logo.png') }}" width="78" height="30">
			</div>
		</div>
		<div class="d-flex align-items-center">
			<div class="pull-left p-r-10 fs-14 d-lg-inline-block d-none text-white">
				<span class="semi-bold">{{ ucfirst(auth()->user()->name) }}</span>
			</div>
			<div class="dropdown pull-right d-lg-block">
				<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="profile dropdown">
					<span class="thumbnail-wrapper d32 circular inline">
						<img src="{{ asset('assets/img/profiles/avatar.jpg') }}" alt="" data-src="{{ asset('assets/img/profiles/avatar.jpg') }}" data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}" width="32" height="32">
					</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
					<a href="#" class="dropdown-item"><span>Signed in as <br /><b>{{ ucfirst(auth()->user()->name) }}</b></span></a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">Your Profile</a>
					<a href="#" class="dropdown-item">Your Activity</a>
					<a href="#" class="dropdown-item">Your Archive</a>
					<div class="dropdown-divider"></div>
					<a href="#" class="dropdown-item">Features</a>
					<a href="#" class="dropdown-item">Help</a>
					<a href="#" class="dropdown-item">Settings</a>
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						Logout
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
					<div class="dropdown-divider"></div>
					<span class="dropdown-item fs-12 hint-text">Last logged in by you<br />on
						{{ \Carbon\Carbon::parse(auth()->user()->last_login)->format('D') }} at {{ \Carbon\Carbon::parse(auth()->user()->last_login)->format('g:i A') }}
					</span>
				</div>
			</div>
		</div>
	</div>

	<div class="bg-white">
		<div class="container">
			<div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
				<a href="#" class="btn-link header-icon toggle-sidebar d-lg-none" data-toggle="horizontal-menu">
					<i class="pg-icon">close</i>
				</a>
				<ul>
					<li class="{{ set_active('home') }}">
						<a href="{{ route('home') }}">Dashboard</a>
					</li>
					<li class="{{ set_active('admin.*') }}">
						<a href="javascript:;"><span class="title">Administration</span>
							<span class=" arrow"></span></a>
						<ul>
							<li>
								<a href="{{ route('admin.roles.index') }}">Roles</a>
							</li>
							<li>
								<a href="{{ route('admin.permissions.index') }}">Permissions</a>
							</li>
							<li>
								<a href="{{ route('admin.users.index') }}">Users</a>
							</li>
						</ul>
					</li>
					<li class="{{ set_active('impersonate.index') }}">
						<a href="{{ route('impersonate.index') }}">
							<span class="title">Impersonate</span>
						</a>
					</li>
					<li>
						<a href="/manthra">
							<span class="title">Manthra</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>