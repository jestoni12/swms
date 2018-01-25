@extends('layouts.master')

@section('title', ' - Job')

@section('content_header', 'Edit Job')

@section('content_header_link')
    <li ><a href="{{ route('jobs') }}" style="color:#08A7C3">List</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('action_edit_job',$id)}}" method="POST">
                {{ method_field('PUT') }}
                @include('job._form')
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        @can('edit_jobs')
                            <button type="submit" class="btn btn-sm btn-info" name="edit_job" value="edit_job">
                                Update
                            </button>
                        @endcan
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection