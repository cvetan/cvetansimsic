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
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->name }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>
                            <a href="{{ route('admin.pages.show', ['page' => $page->id]) }}" class="btn btn-success" target="_blank">
                                <i class="fa fa-eye m-r-2"></i>
                                <span>{{ __('general.preview') }}</span>
                            </a>

                            <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}" class="btn btn-flat btn-warning">
                                <i class="fa fa-pencil m-r-2"></i>
                                <span>{{ __('general.edit') }}</span>
                            </a>

                            <a href="#" class="btn btn-danger">
                                <i class="fa fa-minus-circle"></i>
                                <span>{{ __('general.remove') }}</span>
                            </a>
                        </td>
                    </tr>
                @endforeach

                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->name }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>
                            <a href="{{ route('admin.pages.show', ['page' => $page->id]) }}" class="btn btn-success" target="_blank">
                                <i class="fa fa-eye m-r-2"></i>
                                <span>{{ __('general.preview') }}</span>
                            </a>

                            <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}" class="btn btn-flat btn-warning">
                                <i class="fa fa-pencil m-r-2"></i>
                                <span>{{ __('general.edit') }}</span>
                            </a>

                            <a href="#" class="btn btn-danger">
                                <i class="fa fa-minus-circle"></i>
                                <span>{{ __('general.remove') }}</span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
