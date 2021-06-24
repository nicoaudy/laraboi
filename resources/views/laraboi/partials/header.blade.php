<div class="topbar">
	<div class="topbar-left">
		<a href="index.html" class="logo">
			<span class="logo-light">
				<i class="mdi mdi-camera-control"></i> {{ env('APP_NAME') }}
			</span>
			<span class="logo-sm">
				<i class="mdi mdi-camera-control"></i>
			</span>
		</a>
	</div>
	<nav class="navbar-custom">
		<ul class="navbar-right list-inline float-right mb-0">
			<li class="dropdown notification-list list-inline-item">
				<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
					<i class="mdi mdi-bell-outline noti-icon"></i>
					<span class="badge badge-pill badge-danger noti-icon-badge">3</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
					<!-- item-->
					<h6 class="dropdown-item-text">
						Notifications
					</h6>
					<div class="slimscroll notification-item-list">
						<!-- item-->
						<a href="javascript:void(0);" class="dropdown-item notify-item active">
							<div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
							<p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
						</a>

						<!-- item-->
						<a href="javascript:void(0);" class="dropdown-item notify-item">
							<div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
							<p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
						</a>

						<!-- item-->
						<a href="javascript:void(0);" class="dropdown-item notify-item">
							<div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
							<p class="notify-details"><b>Your item is shipped</b><span class="text-muted">It is a long established fact that a reader will</span></p>
						</a>

						<!-- item-->
						<a href="javascript:void(0);" class="dropdown-item notify-item">
							<div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
							<p class="notify-details"><b>New Message received</b><span class="text-muted">You have 87 unread messages</span></p>
						</a>

						<!-- item-->
						<a href="javascript:void(0);" class="dropdown-item notify-item">
							<div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
							<p class="notify-details"><b>Your order is placed</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
						</a>

					</div>
					<!-- All-->
					<a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
						View all <i class="fi-arrow-right"></i>
					</a>
				</div>
			</li>

			<li class="dropdown notification-list list-inline-item">
				<div class="dropdown notification-list nav-pro-img">
					<a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
						<img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle">
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
						@if(auth()->user()->isImpersonating() || session()->has('impersonate'))
						<a class="dropdown-item" href="{{ route('impersonate.stop') }}"><i class="mdi mdi-stop-circle"></i> Stop Impersonate</a>
						@endif
						<a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
						<a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> My Wallet</a>
						<a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
						<a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i> Logout</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</div>
			</li>

		</ul>

		<ul class="list-inline menu-left mb-0">
			<li class="float-left">
				<button class="button-menu-mobile open-left waves-effect">
					<i class="mdi mdi-menu"></i>
				</button>
			</li>
			<li class="d-none d-md-inline-block">
				<form role="search" class="app-search">
					<div class="form-group mb-0">
						<input type="text" class="form-control" placeholder="Search..">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</li>
		</ul>
	</nav>
</div>
