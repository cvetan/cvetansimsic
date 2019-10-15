@extends('layouts.auth')

@section('title', __('Reset Password'))

@section('content')
    <form method="POST" action="{{ route('password.update') }}" class="form-horizontal m-t-20">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group @error('email') has-error @enderror">
            <div class="col-xs-12">
                <input id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autofocus placeholder="{{ __('E-Mail Address') }}">

                @error('email')
                    <span class="help-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group @error('password') has-error @enderror">
            <div class="col-xs-12">
                <input id="password" type="password" class="form-control" name="password" placeholder="{{ __('Password') }}">

                @error('password')
                    <span class="help-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">
                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
@endsection
