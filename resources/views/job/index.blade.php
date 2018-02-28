@extends('layouts.master')

@section('title', ' - Job')
@section('content_header', 'Jobs')

@section('content_header_link')
    <li class="active">List</li>
    @can('add_jobs')
        <li><a href="{{ route('create_job') }}" style="color:#08A7C3"><i class="glyphicon glyphicon-plus"></i> Add Job</a></li>
    @endcan
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Job Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $job)
                    <tr>
                        <td>{{ $job->id }}</td>
                        <td>{{ ucfirst($job->description) }}</td>
                        <td>{{ $job->status }}</td>
                        <td>{{ $job->created_at }}</td>
                        <td>
                            @can('edit_jobs')
                                <a href="{{route('edit_job', $job->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            @endcan
                            @can('delete_jobs')
                                <form action="{{route('delete_job',$job->id)}}" style="display: inline" onclick="return confirm('Do you really want to delete it?')" method="POST">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn-delete btn btn-xs btn-danger" name="delete_fertilizer" value="delete_fertilzer">
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
