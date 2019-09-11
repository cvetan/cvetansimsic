@extends('layouts.admin')

@section('title', __('users.edit_user'))

@section('pageTitle', __('users.edit_user'))

@section('content')
    {{ Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'PATCH']) }}
    @include('admin.users.partials._form')
    {{ Form::close() }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/switchery/switchery.min.css') }}">
@endsection

@section('js')
    @include('admin.pages.partials._js')
@endsection
