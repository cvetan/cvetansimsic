@extends('layouts.admin')

@section('title', __('pages.page_list'))

@section('pageTitle', __('pages.page_list'))

@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Status</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
            </thead>
        </table>
    </div>
@endsection
