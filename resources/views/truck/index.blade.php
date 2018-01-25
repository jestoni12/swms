@extends('layouts.master')

@section('title', ' - Trucks')

@section('content_header')
    Trucks
@endsection

@section('content_header_link')
    <li class="active">List</a></li>
    @can('add_users')
        <li><a href="{{ route('trucks.create') }}" style="color:#08A7C3"><i class="glyphicon glyphicon-plus"></i> Create Trucks</a></li>
    @endcan
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Plate Number</th>
                <th>Created At</th>
                @can('edit_trucks', 'delete_trucks')
                <th class="text-center">Actions</th>
                @endcan
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->plate_number }}</td>
                    <td>{{ $item->created_at->toFormattedDateString() }}</td>

                    @can('edit_users')
                    <td class="text-center">
                        @include('shared._actions', [
                            'entity' => 'trucks',
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