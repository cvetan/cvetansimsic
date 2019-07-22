<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cvetan Šimšić Developer Blog">
    <meta name="author" content="Cvetan Šimšić">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- App title -->
    <title>@yield('title', 'Dashboard :: Welcome')</title>

    <!-- App CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/adminto.css') }}">

    @yield('css')

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('js/modernizr.min.js') }}"></script>
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="/" class="logo">
                <span>
                    Admin<span>to</span>
                </span>
                <i class="zmdi zmdi-layers"></i>
            </a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title">@yield('pageTitle', 'Dashboard :: Welcome')</h4>
                    </li>
                </ul>

                @include('components.admin.notification-trigger-holder')

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            @include('components.admin.user')

            @include('components.admin.sidebar')
        </div>

    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            @include('components.admin.flash')

                            @yield('content', 'No content for this page')
                        </div>
                    </div>
                </div>
                <!-- End row -->

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            2016 © Adminto.
        </footer>

    </div>
    <!-- End content-page -->


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        @include('components.admin.notifications')
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->


<script>
    let resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('js/adminto-vendor.js') }}"></script>
@yield('js')
<script src="{{ asset('js/adminto-app.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
