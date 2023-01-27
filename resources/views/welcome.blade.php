<html lang="en" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMS</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="/dashcss/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.css">
    <script defer="" referrerpolicy="origin"
        src="/cdn-cgi/zaraz/s.js?z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQWRtaW5MVEUlMjAzJTIwJTdDJTIwRGFzaGJvYXJkJTIyJTJDJTIyeCUyMiUzQTAuMTIxMzEzMzQwNTIxOTYwMTklMkMlMjJ3JTIyJTNBMTkyMCUyQyUyMmglMjIlM0ExMDgwJTJDJTIyaiUyMiUzQTE1MCUyQyUyMmUlMjIlM0ExOTIwJTJDJTIybCUyMiUzQSUyMmh0dHBzJTNBJTJGJTJGYWRtaW5sdGUuaW8lMkZ0aGVtZXMlMkZ2MyUyRmluZGV4Lmh0bWwlMjMlMjIlMkMlMjJyJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZhZG1pbmx0ZS5pbyUyRnRoZW1lcyUyRnYzJTJGaW5kZXgzLmh0bWwlMjIlMkMlMjJrJTIyJTNBMjQlMkMlMjJuJTIyJTNBJTIyVVRGLTglMjIlMkMlMjJvJTIyJTNBLTMzMCUyQyUyMnElMjIlM0ElNUIlNUQlN0Q=">
    </script>
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body class="sidebar-mini layout-fixed" style="height: auto;">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
            <img class="animation__shake" src="https://robohash.org/stefan-three" alt="AdminLTELogo" height="60"
                width="60" style="display: none;">
        </div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('dashboard') }}" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fa fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="https://robohash.org/stefan-three" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="https://robohash.org/stefan-three" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="https://robohash.org/stefan-three" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fa fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                        href="#" role="button">
                        <i class="fa fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div
                class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: 0px -8px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
                        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">
                                    <img src="https://www.shutterstock.com/image-photo/young-beautiful-happy-businesswoman-sitting-260nw-165623561.jpg"
                                        style="width:50px;height:50px;" class="img-circle elevation-1"
                                        alt="User Image">
                                </div>
                                <div class="info">
                                    <h2 style="color:DodgerBlue;">Admin</h2>
                                </div>
                            </div>
                            <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search"
                                        placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fa fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="sidebar-search-results">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <div class="search-title"><strong class="text-light"></strong>N<strong
                                                    class="text-light"></strong>o<strong class="text-light"></strong>
                                                <strong class="text-light"></strong>e<strong
                                                    class="text-light"></strong>l<strong class="text-light"></strong>e
                                                <strong class="text-light"></strong>m<strong
                                                    class="text-light"></strong>e<strong
                                                    class="text-light"></strong>n<strong
                                                    class="text-light"></strong>t<strong class="text-light"></strong>
                                                <strong class="text-light"></strong>f
                                                <strong class="text-light"></strong>o<strong
                                                    class="text-light"></strong>u<strong
                                                    class="text-light"></strong>n<strong
                                                    class="text-light"></strong>d<strong
                                                    class="text-light"></strong>!<strong class="text-light"></strong>
                                            </div>
                                            <div class="search-path"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                    role="menu" data-accordion="false">
                                    <li class="nav-item menu-open">
                                        <a href="{{ url('welcome') }}" class="nav-link active">
                                            <i class="nav-icon fa fa-tachometer-alt"></i>
                                            <p>
                                                Dashboard
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('admission') }}" class="nav-link">
                                            <i class="nav-icon fa fa-th"></i>
                                            <p>
                                                Admission
                                                <span class="right badge badge-danger">New</span>
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa fa-copy"></i>
                                            <p>
                                                Attendence
                                                <i class="fa fa-angle-left right"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="{{ url('attendence') }}" class="nav-link">
                                                    <i class="fa fa-circle nav-icon"></i>
                                                    <p>Student Attendence</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa fa-chart-pie"></i>
                                            <p>
                                                Class
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa fa-tree"></i>
                                            <p>
                                                Assessments
                                            
                                            </p>
                                        </a>
                                    <li class="nav-item">
                                        <a href="{{ url('subject') }}" class="nav-link">
                                            <i class="nav-icon fa fa-tree"></i>
                                            <p>
                                                Subjects

                                            </p>
                                        </a>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa fa-tree"></i>
                                            <p>
                                                Exams

                                            </p>
                                        </a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="nav-icon fa fa-table"></i>
                                            <p>
                                                Time Tables
                                                <i class="fa fa-angle-left right"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="pages/tables/simple.html" class="nav-link">
                                                    <i class="fa fa-circle nav-icon"></i>
                                                    <p>Classe Time Table</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="pages/tables/data.html" class="nav-link">
                                                    <i class="fa fa-circle nav-icon"></i>
                                                    <p>Teachers Time Table</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <form method="POST" id="logoutform" action="{{ route('logout') }}">
                                        @csrf
                                        <li class="nav-item"><a class="nav-link text-white fw-bold"
                                                onclick="event.preventDefault();
                                        this.closest('form').submit(); "
                                                href="{{ route('logout') }}">
                                                Sign Out</a>
                                        </li>
                                    </form>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="height: 6.84327%; transform: translate(0px, 0px);">
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
        </aside>
        <div class="content-wrapper" style="min-height: 36px;">
            <!-- Navigater home/dashborard -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        {{--  <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>  --}}
                    </div>
                </div>
            </div>
            <!-- write Code here -->
            <section class="content">
                @yield('body')
            </section>
        </div>
        <!-- Footer code -->
        <!-- right Side bar  -->
        <aside class="control-sidebar control-sidebar-dark" style="display: none; top: 57px; height: 93px;">
            <div class="p-3 control-sidebar-content os-host os-theme-light os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-scrollbar-vertical-hidden os-host-transition"
                style="height: 93px;">
                <div class="os-resize-observer-host observed">
                    <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
                </div>
                <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
                    <div class="os-resize-observer"></div>
                </div>
                <div class="os-content-glue" style="margin: -16px; width: 0px; height: 0px;"></div>
                <div class="os-padding">
                    <div class="os-viewport os-viewport-native-scrollbars-invisible">
                        <div class="os-content" style="padding: 16px; height: 100%; width: 100%;">
                            <h5>Customize AdminLTE</h5>
                            <hr class="mb-2">
                            <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark
                                    Mode</span></div>
                        </div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-unusable os-scrollbar-auto-hidden">
                    <div class="os-scrollbar-track">
                        <div class="os-scrollbar-handle" style="transform: translate(0px, 0px);"></div>
                    </div>
                </div>
                <div class="os-scrollbar-corner"></div>
            </div>
        </aside>
        <div id="sidebar-overlay">
        </div>
    </div>
    <script src="https://adminlte.io/themes/v3/plugins/jquery/jquery.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/chart.js/Chart.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/sparklines/sparkline.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/moment/moment.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- <script src="https://adminlte.io/themes/v3/plugins/summernote/summernote-bs4.min.js"></script> -->
    <!-- <script src="https://adminlte.io/themes/v3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <script src="https://adminlte.io/themes/v3/dist/js/adminlte.js?v=3.2.0"></script>
    {{--  <script src="https://adminlte.io/themes/v3/dist/js/demo.js"></script>  --}}
    <script src="https://adminlte.io/themes/v3/dist/js/pages/dashboard.js"></script>
    <div class="daterangepicker ltr show-ranges opensright">
        <div class="ranges">
            <ul>
                <li data-range-key="Today">Today</li>
                <li data-range-key="Yesterday">Yesterday</li>
                <li data-range-key="Last 7 Days">Last 7 Days</li>
                <li data-range-key="Last 30 Days">Last 30 Days</li>
                <li data-range-key="This Month">This Month</li>
                <li data-range-key="Last Month">Last Month</li>
                <li data-range-key="Custom Range">Custom Range</li>
            </ul>
</body>
</html>
