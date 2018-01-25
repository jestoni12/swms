@extends('layouts.master')

@section('title', ' - Employee')

@section('content_header', 'Add Employee')

@section('content_header_link')
    <li><a href="{{ route('employees') }}" style="color:#08A7C3">List</a></li>
    @can('add_employees')
        <li class="active"><i class="glyphicon glyphicon-plus"></i> Add Employee</li>
    @endcan
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('create_employee')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="firstname">Firstname :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="firstname" placeholder="Firstname" required name="firstname" value="{{ isset($emps) ? $emps->firstname : old('firstname') }}">
                        @if ($errors->has('firstname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="middlename">Middlename :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="middlename" placeholder="Middlename" required name="middlename" value="{{ isset($emps) ? $emps->middlename : old('middlename') }}">
                        @if ($errors->has('middlename'))
                            <span class="help-block">
                                <strong>{{ $errors->first('middlename') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="lastname">Lastname :</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lastname" placeholder="Lastname" required name="lastname" value="{{ isset($emps) ? $emps->lastname : old('lastname') }}">
                        @if ($errors->has('lastname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
                    <label class="control-label col-sm-3" for="job">Job :</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="job_id" id="job_id" placeholder="Job">
                                <option value="" selected="">-- Select One --</option>
                            @foreach($jobs as $job)
                                <option value="{{ $job->id }}">{{ $job->description }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('job'))
                            <span class="help-block">
                                <strong>{{ $errors->first('job') }}</strong>
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
                        @can('add_employees')
                            <button type="submit" name="save_employee" value="save_employee" class="btn btn-sm btn-info">
                            Save
                            </button>
                        @endcan
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection