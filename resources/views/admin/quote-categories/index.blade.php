@extends('layouts.admin')

@section('title', __('quote_categories.list'))

@section('pageTitle', __('quote_categories.list'))

@include('admin.partials._sweet_alert')

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-sweetalert/sweet-alert.css') }}">
@endsection

@section('js')
    <script src="{{ asset('plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>
@endsection

@section('content')
    @if($categories->isEmpty())
        <div class="alert alert-info">
            {{ __('quote_categories.no_categories_message') }}

            <a href="{{ route('admin.quote-categories.create') }}">
                {{ __('general.create_one') }}
            </a>
        </div>

    @else
        <div class="">
            <a href="{{ route('admin.quote-categories.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                <span>{{ __('general.new') }}</span>
            </a>
        </div>

        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{  __('general.name') }}</th>
                    <th>{{ __('general.icon') }}</th>
                    <th>{{ __('general.actions') }}</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td><span class="{{ $category->icon }}"></span></td>
                        <td>
                            @include('admin.partials._buttons', [
                                'editLink'      => route('admin.quote-categories.edit', ['quoteCategory' => $category->id]),
                                'deleteLink'    => route('admin.quote-categories.destroy', ['quoteCategory' => $category->id])
                            ])

                            @include('admin.partials._buttons_xs', [
                                'editLink'      => route('admin.quote-categories.edit', ['quoteCategory' => $category->id]),
                                'deleteLink'    => route('admin.quote-categories.destroy', ['quoteCategory' => $category->id])
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
