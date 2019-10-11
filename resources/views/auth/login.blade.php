@extends('layouts.auth')

@section('title', __('auth.login'))

@section('content')
    <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="/" class="logo" target="_blank">
                    <span>Admin<span>to</span></span>
                </a>
            </div>
            <div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">{{ __('Login') }}</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="form-group row @error('email') has-error @enderror">
                            <div class="col-xs-12">
                                <input class="form-control" id="email" name="email" type="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}">

                                @error('email')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password" name="password" class="form-control @error('password') has-error @enderror" type="password" required placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="help-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox-signup">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            @if (Route::has('password.request'))
                                <div class="col-sm-12">
                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                </div>
                            @endif
                        </div>
                    </form>

                </div>
            </div>
            <!-- end card-box-->
        </div>
        <!-- end wrapper page -->
@endsection
