@extends('layouts.admin')

@section('title', __('pages.create_new_page'))

@section('pageTitle', __('pages.create_new_page'))

@section('content')
    <form action="" class="form-horizontal">
        @include('admin.pages.partials._form')
    </form>
@endsection
