@extends('layouts.master')

@section('title', ' - Users')

@section('content_header')
    {{ $result->total() }}  {{ str_plural('User', $result->count()) }}
@endsection

@section('content_header_link')
    <li class="active">List</a></li>
    @can('add_users')
        <li><a href="{{ route('users.create') }}" style="color:#08A7C3"><i class="glyphicon glyphicon-plus"></i> Create User</a></li>
    @endcan
@endsection

@section('content')
    <div class="result-set">
        <div class="row">
            <div class="col-sm-1">
                <a href="{{route('print_user')}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-print"></i> List of User</a>
            </div>
            <div class="col-sm-1" style="padding-bottom:10px;display: none;">
                <a href="{{route('print_user_barcode')}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-print"></i> Print Barcode</a>
            </div>
        </div>
        <table class="table table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created At</th>
                @can('edit_users', 'delete_users')
                <th class="text-center">Actions</th>
                @endcan
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ ucfirst($item->firstname) }} {{ ucfirst($item->middlename) }} {{ ucfirst($item->lastname) }}</td>
                    <td>{{ ucfirst($item->username) }}</td>
                    <td>{{ $item->roles->implode('name', ', ') }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->created_at->toFormattedDateString() }}</td>

                    @can('edit_users')
                    <td class="text-center">
                        @include('shared._actions', [
                            'entity' => 'users',
                            'id' => $item->id
                        ])
                    </td>
                    @endcan
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-center">
            {{ $result->links() }}
        </div>
    </div>

@endsection