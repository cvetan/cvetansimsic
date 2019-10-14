@extends('layouts.auth')

@section('title', __('Reset Password'))

@section('page_description')
    <p class="text-muted m-b-0 font-13 m-t-20">
        {{ __('auth.password_recovery_desc') }}
    </p>
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="form-horizontal m-t-20">
        @csrf

        <div class="form-group @error('email') has-error @enderror">
            <div class="col-xs-12">
                <input class="form-control" id="email" name="email" type="email" required autofocus placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}">

                @error('email')
                    <span class="help-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group text-center m-t-20 m-b-0">
            <div class="col-xs-12">
                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>
@endsection
