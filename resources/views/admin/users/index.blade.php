@extends('layouts.admin')

@section('title', __('users.list'))

@section('pageTitle', __('users.list'))

@include('admin.partials._sweet_alert')

@section('content')
    @if($users->isEmpty())
        <div class="alert alert-info">
            {{ __('users.no_users_message') }}

            <a href="{{ route('admin.users.create') }}">
                {{ __('general.create_one') }}
            </a>
        </div>

    @else
        <div class="">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                <span>{{ __('general.new') }}</span>
            </a>
        </div>

        <table class="table table-responsive">
            <thead>
            <tr>
                <th>#</th>

            </tr>
            </thead>

            <tbody>

            </tbody>
        </table>
    @endif
@endsection
