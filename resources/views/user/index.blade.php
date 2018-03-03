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
                <th>NAME</th>
                <th>USERNAME</th>
                <th>ROLE</th>
                <th>STATUS</th>
                @can('edit_users', 'delete_users')
                <th class="text-center">ACTIONS</th>
                @endcan
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <tr>
                    <td>{{ ucfirst($item->firstname) }} {{ ucfirst($item->middlename) }} {{ ucfirst($item->lastname) }}</td>
                    <td>{{ ucfirst($item->username) }}</td>
                    <td>{{ $item->roles->implode('name', ', ') }}</td>
                    <td>{{ $item->status }}</td>
                    @can('edit_users')
                    <td class="text-center">
                        @include('shared._actions', [
                            'entity' => 'users',
                            'id' => $item->id
                        ])
                        <form action="" style="display: inline;"  method="POST">
                            {{csrf_field()}}
                            {{ method_field('PATCH') }}
                            @if($item->status == 'Active')
                                <button style="width: 60px;" type="submit" class="btn-success btn btn-xs btn-success">Active</button>
                            @else
                                <button type="submit" class="btn-danger btn btn-xs btn-danger">Inactive</button>
                            @endif
                        </form>
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