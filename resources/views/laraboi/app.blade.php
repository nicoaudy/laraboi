<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
		<title>{{ env("APP_NAME", 'Laraboi') }}</title>
		<link rel="apple-touch-icon" href="pages/ico/60.png">
		<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
		<link rel="icon" type="image/x-icon" href="favicon.ico" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="default">

		<meta content="Laraboi - The simplest and fastest laravel boilerplate way to build next app." name="description" />
		<meta content="NicoAudy" name="author" />
		<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

		@stack('stylesheet')
    </head>

    <body>

        <div id="wrapper">

			@include('laraboi.partials.header')
			@include('laraboi.partials.sidebar')


            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
						@yield('before-content')
						@yield('content')
                    </div>
                </div>

				@include('laraboi.partials.footer')
            </div>
        </div>

		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
		<script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
		<script src="{{ asset('assets/js/waves.min.js') }}"></script>

		<script src="{{ asset('assets/js/app.js') }}"></script>


		{{ noty_assets() }}

		@stack('javascript')
    </body>
</html>