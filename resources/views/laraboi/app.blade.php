<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />

    <title>{{ env("APP_NAME", 'Laraboi') }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('pages/css/themes/modern.css') }}" rel="stylesheet" type="text/css" />

    @stack('stylesheet')
</head>

<body class="fixed-header horizontal-menu horizontal-app-menu ">
    <!-- START PAGE-CONTAINER -->
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
                        <a href="#" class="dropdown-item">Logout</a>
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

    <div class="page-container">
        <div class="page-content-wrapper">
            <div class="content">
                <div class="bg-white">
                    <div class="container">
                        <ol class="breadcrumb breadcrumb-alt">
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Blank template</li>
                        </ol>
                    </div>
                </div>

                <div class="mt-4 container container-fixed-lg">
                    @yield('content')
                </div>
            </div>

            @include('laraboi.partials.footer')

        </div>
    </div>


    <script src="{{ asset('assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>

    <!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
    <script src="{{ asset('assets/plugins/liga.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/popper/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/classie/classie.js') }}"></script>
    <!-- END VENDOR JS -->

    <script src="{{ asset('pages/js/pages.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}" type="text/javascript"></script>

    {{ noty_assets() }}

    @stack('javascript')
</body>

</html>