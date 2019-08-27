@extends('layouts.admin')

@section('title', __('quote_categories.edit'))

@section('pageTitle', __('quote_categories.edit'))

@section('content')
    {{ Form::model($quoteCategory, ['route' => ['admin.quote-categories.update', $quoteCategory->id], 'method' => 'PUT']) }}
        @include('admin.quote-categories.partials._form')
    {{ Form::close() }}
@endsection
