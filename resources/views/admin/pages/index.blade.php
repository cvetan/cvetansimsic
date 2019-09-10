@extends('layouts.admin')

@section('title', __('pages.page_list'))

@section('pageTitle', __('pages.page_list'))

@include('admin.partials._sweet_alert')

@section('content')
    @if($pages->isEmpty())
        <div class="alert alert-info">
            {{ __('pages.no_pages_message') }}

            <a href="{{ route('admin.pages.create') }}">
                {{ __('general.create_one') }}
            </a>
        </div>

    @else
        <div class="">
            <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                <span>{{ __('general.new') }}</span>
            </a>
        </div>

        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{  __('general.name') }}</th>
                    <th>{{ __('general.slug') }}</th>
                    <th>{{ __('general.actions') }}</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->name }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>
                            @include('admin.partials._buttons', [
                                'showLink'      => route('admin.pages.show', ['page' => $page->id]),
                                'editLink'      => route('admin.pages.edit', ['page' => $page->id]),
                                'deleteLink'    => route('admin.pages.destroy', ['page' => $page->id])
                            ])

                            @include('admin.partials._buttons_xs',  [
                                'showLink'      => route('admin.pages.show', ['page' => $page->id]),
                                'editLink'      => route('admin.pages.edit', ['page' => $page->id]),
                                'deleteLink'    => route('admin.pages.destroy', ['page' => $page->id])
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
