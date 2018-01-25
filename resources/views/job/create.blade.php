@extends('layouts.master')

@section('title', ' - Job')

@section('content_header', 'Add Job')

@section('content_header_link')
    <li><a href="{{ route('jobs') }}" style="color:#08A7C3">List</a></li>
    @can('add_jobs')
        <li class="active"><i class="glyphicon glyphicon-plus"></i> Add Job</li>
    @endcan
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('create_job')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('fertilizer') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="fertilizer">Job Description:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="description" placeholder="Description" required name="description" value="{{ isset($job) ? $job->description : old('description') }}">
                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="status">Status:</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="status" placeholder="Status" id="status" required>
                            <option value="" selected="">-- Select One --</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                        @if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        @can('add_jobs')
                            <button type="submit" name="save_job" value="save_job" class="btn btn-sm btn-info">
                                Save
                            </button>
                        @endcan
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection