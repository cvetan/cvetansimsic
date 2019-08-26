@extends('layouts.admin')

@section('title', __('quote_categories.new'))

@section('pageTitle', __('quote_categories.new'))

@section('content')
    {{ Form::open(['route' => 'admin.quote-categories.store']) }}
        @include('admin.quote-categories.partials._form')
    {{ Form::close() }}
@endsection
