@extends('layouts.admin')

@section('title', __('pages.page_list'))

@section('pageTitle', __('pages.page_list'))

@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-sweetalert/sweet-alert.css') }}">
@endsection

@section('js')
    <script src="{{ asset('plugins/bootstrap-sweetalert/sweet-alert.min.js') }}"></script>
@endsection

@section('content')
    @if($pages->isEmpty())
        <div class="alert alert-info">
            {{ __('pages.no_pages_message') }}

            <a href="{{ route('admin.pages.create') }}">
                {{ __('general.create_one') }}
            </a>
        </div>

    @else
        <div>
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
                            <div class="btn-group hidden-xs">
                                <a class="btn btn-success" href="{{ route('admin.pages.show', ['page' => $page->id]) }}" target="_blank">
                                    <i class="fa fa-eye m-r-2"></i>
                                    <span>{{ __('general.preview') }}</span>
                                </a>

                                <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}" class="btn btn-flat btn-warning">
                                    <i class="fa fa-pencil m-r-2"></i>
                                    <span>{{ __('general.edit') }}</span>
                                </a>

                                <a href="#" class="btn btn-danger remove-trigger" data-action="{{ route('admin.pages.destroy', ['page' => $page->id])}}">
                                    <i class="fa fa-minus-circle"></i>
                                    <span>{{ __('general.remove') }}</span>
                                </a>
                            </div>

                            <div class="btn-group visible-xs">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    {{ __('general.actions') }} <span class="caret"></span>
                                </button>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('admin.pages.show', ['page' => $page->id]) }}" target="_blank">
                                            {{ __('general.preview') }}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}">
                                            {{ __('general.edit') }}
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#" class="remove-trigger" data-action="{{ route('admin.pages.destroy', ['page' => $page->id])}}">
                                            {{ __('general.remove') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
