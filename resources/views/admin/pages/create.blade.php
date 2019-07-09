@extends('layouts.admin')

@section('title', __('pages.create_new_page'))

@section('pageTitle', __('pages.create_new_page'))

@section('content')
    {{ Form::open(['route' => 'admin.pages.store']) }}
        @include('admin.pages.partials._form')
    {{ Form::close() }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/switchery/switchery.min.css') }}">
@endsection

@section('js')
    @include('admin.pages.partials._js')
@endsection
