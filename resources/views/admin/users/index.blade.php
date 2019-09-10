@extends('layouts.admin')

@section('title', __('users.list'))

@section('pageTitle', __('users.list'))

@include('admin.partials._sweet_alert')

@section('content')
    @if($users->isEmpty())
        <div class="alert alert-info">
            {{ __('users.no_users_message') }}

            <a href="{{ route('admin.users.create') }}">
                {{ __('general.create_one') }}
            </a>
        </div>

    @else
        <div class="">
            <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i>
                <span>{{ __('general.new') }}</span>
            </a>
        </div>

        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('general.first_name') }}</th>
                    <th>{{ __('general.last_name') }}</th>
                    <th>{{ __('general.username') }}</th>
                    <th>{{ __('general.email') }}</th>
                    <th>{{ __('users.account_type') }}</th>
                    <th>{{ __('general.actions') }}</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{!! $user->present()->adminAccount() !!}</td>
                        <td>
                            @include('admin.partials._buttons', [
                                'showLink' => route('admin.users.show', ['user' => $user->id]),
                                'editLink' => route('admin.users.edit', ['user' => $user->id]),
                                'deleteLink' => route('admin.users.destroy', ['user' => $user->id])
                            ])

                            @include('admin.partials._buttons_xs', [
                                'showLink' => route('admin.users.show', ['user' => $user->id]),
                                'editLink' => route('admin.users.edit', ['user' => $user->id]),
                                'deleteLink' => route('admin.users.destroy', ['user' => $user->id])
                            ])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    @endif
@endsection
