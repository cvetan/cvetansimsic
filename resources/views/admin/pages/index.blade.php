@extends('layouts.admin')

@section('title', __('pages.page_list'))

@section('pageTitle', __('pages.page_list'))

@section('content')
    @if($pages->isEmpty())
        <div class="alert alert-info">
            {{ __('pages.no_pages_message') }}

            <a href="{{ route('admin.pages.create') }}">
                {{ __('general.create_one') }}
            </a>
        </div>

    @else

    @endif
@endsection
