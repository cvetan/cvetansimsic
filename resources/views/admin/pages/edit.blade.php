@extends('layouts.admin')

@section('title', __('pages.edit_page'))

@section('pageTitle', __('pages.edit_page'))

@section('content')
    {{ Form::model($page, ['route' => ['admin.pages.update', $page->id], 'method' => 'PATCH']) }}
        @include('admin.pages.partials._form')
    {{ Form::close() }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/switchery/switchery.min.css') }}">
@endsection

@section('js')
    @include('admin.pages.partials._js')
@endsection
