<div class="left side-menu">
	<div class="slimscroll-menu" id="remove-scroll">
		<div id="sidebar-menu">
			<ul class="metismenu" id="side-menu">
				<li class="menu-title">Menu</li>
				<li>
					<a href="{{ route('home') }}" class="waves-effect {{ set_active('home') }}">
						<i class="icon-accelerator"></i><span> Dashboard </span>
					</a>
				</li>

				<li>
					<a href="{{ route('impersonate.index') }}" class="waves-effect {{ set_active('impersonate.index') }}">
						<i class="icon-mail-open"></i><span> Impersonate
					</a>
				</li>

				<li class="menu-title">Administration</li>
				<li>
					<a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Advanced UI <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
					<ul class="submenu">
						<li><a href="advanced-alertify.html">Alertify</a></li>
						<li><a href="advanced-rating.html">Rating</a></li>
						<li><a href="advanced-nestable.html">Nestable</a></li>
						<li><a href="advanced-rangeslider.html">Range Slider</a></li>
						<li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
						<li><a href="advanced-lightbox.html">Lightbox</a></li>
					</ul>
				</li>

				<li>
					<a href="{{ route('admin.users.index') }}" class="waves-effect {{ set_active('admin.users.index') }}">
						<i class="icon-profile"></i><span> Users
					</a>
				</li>
				<li>
					<a href="{{ route('admin.roles.index') }}" class="waves-effect {{ set_active('admin.roles.index') }}">
						<i class="icon-share"></i><span> Roles
					</a>
				</li>
				<li>
					<a href="{{ route('admin.permissions.index') }}" class="waves-effect {{ set_active('admin.permissions.index') }}">
						<i class="icon-tshirt"></i><span> Permissions
					</a>
				</li>

			</ul>

		</div>
		<div class="clearfix"></div>
	</div>
</div>
