@extends('layouts.admin')

@section('title', __('users.create_new_user'))

@section('pageTitle', __('users.create_new_user'))

@section('content')
    {{ Form::open(['route' => 'admin.users.store']) }}
    @include('admin.users.partials._form')
    {{ Form::close() }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/switchery/switchery.min.css') }}">
@endsection

@section('js')
    @include('admin.pages.partials._js')
@endsection
