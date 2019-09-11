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
    <title>Dashboard :: Login</title>

    <!-- App CSS -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
        rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('css/adminto.css') }}">


    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script
        src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script
        src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('js/modernizr.min.js') }}"></script>
</head>


<body>
    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
        <div class="text-center">
            <a href="{{ url('/') }}" class="logo"><span>Admin<span>to</span></span></a>
            <h5 class="text-muted m-t-0 font-600">Responsive Admin Dashboard</h5>
        </div>
        <div class="m-t-40 card-box">
            <div class="text-center">
                <h4 class="text-uppercase font-bold m-b-0">{{ __('auth.sign_in') }}</h4>
            </div>
            <div class="panel-body">
                {{ Form::open(['route' => 'admin.do_login', 'class' => 'form-horizontal m-t-20']) }}
                    <div class="form-group ">
                        <div class="col-xs-12">
                            {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => __('auth.username_or_email')]) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            {{ Form::password('password', ['class' => 'form-control', 'placeholder' =>  __('Password')]) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="checkbox checkbox-custom">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    {{ __('Remember me') }}
                                </label>
                            </div>

                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="form-group">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <div class="form-group text-center m-t-30">
                        <div class="col-xs-12">
                            {{ Form::button(__('Login'), ['class' => 'btn btn-custom btn-bordred btn-block waves-effect waves-light', 'type' => 'submit']) }}
                        </div>
                    </div>

                    <div class="form-group m-t-30 m-b-0">
                        <div class="col-sm-12">
                            <a href="{{ route('admin.') }}" class="text-muted">
                                <i class="fa fa-lock m-r-5"></i>
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
        <!-- end card-box-->

    </div>
    <!-- end wrapper page -->

    <script>
        let resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('js/admin-vendor.js') }}"></script>
</body>
</html>
