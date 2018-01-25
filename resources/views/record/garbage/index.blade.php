@extends('layouts.master')

@section('title', ' - Garbage Weigh In')
@section('content_header', 'Garbage Weigh In')

@section('content_header_link')
    <li class="active">List</li>
    @can('add_garbages')
        <li><a href="{{ route('create_garbage') }}" style="color:#08A7C3">Add Garbage</a></li>
    @endcan
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Users</th>
                <th>Garbage name</th>
                <th>Garbage remarks</th>
                <th>Garbage Kilogram</th>
                <th>Recycable Garbage</th>
                <th>Biodegradable Garbage</th>
                @can('edit_garbages', 'delete_garbages')
                <th>Actions</th>
                @endcan
            </tr>
            </thead>
            <tbody>
                @foreach($garbage as $garbages)
                    <tr>
                        <td>{{ $garbages->id }}</td>
                        <td>{{ ucfirst($garbages->users->firstname).' '.ucfirst($garbages->users->middlename).' '.ucfirst($garbages->users->lastname) }}</td>
                        <td>{{ $garbages->description }}</td>
                        <td>{{ $garbages->remarks }}</td>
                        <td>{{ $garbages->total_weight }}</td>
                        <td>{{ $garbages->recycable_weight }}</td>
                        <td>{{ $garbages->biodegradable_weight }}</td>
                        <td>
                            @can('edit_garbages')
                                <a href="{{route('edit_garbage', $garbages->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            @endcan
                            @can('delete_garbages')
                                <form action="{{route('delete_garbage',$garbages->id)}}" style="display: inline" onclick="return confirm('Do you really want to delete it?')" method="POST">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn-delete btn btn-xs btn-danger" name="delete_garbage" value="delete_garbage">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
        </div>
    </div>
@endsection
