@extends('layouts.master')

@section('title', ' - Fertilizer')
@section('content_header', 'Generated Fertilizer')

@section('content_header_link')
    <li class="active">List</li>
    @can('add_fertilizers')
        <li><a href="{{ route('create_fertilizer') }}" style="color:#08A7C3">Add Fertilizer</a></li>
    @endcan
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            <thead>
                <tr>
                    <th> Id</th>
                    <th>Users</th>
                    <th>Fertilizer name</th>
                    <th>Fertilizer remarks</th>
                    <th>Generated Kilogram</th>
                    <th>Created At</th>
                    @can('edit_fertilizers', 'delete_fertilizers')
                    <th>Actions</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach($result as $results)
                    <tr>
                        <td>{{ $results->id }}</td>
                        <td>{{ ucfirst($results->users->firstname).' '.ucfirst($results->users->middlename).' '.ucfirst($results->users->lastname)}}</td>
                        <td>{{ $results->name }}</td>
                        <td>{{ $results->remarks }}</td>
                        <td>{{ $results->generated_kilo }}</td>
                        <td>{{ $results->created_at->toFormattedDateString() }}</td>
                        <td>
                            @can('edit_fertilizers')
                                <a href="{{route('edit_fertilizer', $results->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            @endcan
                            @can('delete_fertilizers')
                                <form action="{{route('delete_fertilizer',$results->id)}}" style="display: inline" onclick="return confirm('Do you really want to delete it?')" method="POST">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn-delete btn btn-xs btn-danger" name="delete_fertilizer" value="delete_fertilzer">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center">
        </div>
    </div>
@endsection
