@extends('layouts.master')

@section('title', ' - Trucks')

@section('content_header')
    Trucks
@endsection

@section('content_header_link')
    <li class="active">List</a></li>
    @can('add_users')
        <li><a href="{{ route('users.create') }}" style="color:#08A7C3"><i class="glyphicon glyphicon-plus"></i> Create User</a></li>
    @endcan
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
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
                    <td>{{ $item->firstname }} {{ $item->middlename }} {{ $item->lastname }}</td>
                    <td>{{ $item->username }}</td>
                    <td>{{ $item->roles->implode('name', ', ') }}</td>
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