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
    <title>@yield('title', config('app.name', 'Laravel'))</title>

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
<body>
    @yield('content', 'No content')

    <script>
        let resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('js/adminto-vendor.js') }}"></script>
    @yield('js')
    @include('components.admin.serverjs')
    <script src="{{ asset('js/adminto-app.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
