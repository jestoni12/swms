@extends('layouts.master')

@section('title', ' - Employee')

@section('content_header', 'Edit Employee')

@section('content_header_link')
    <li ><a href="{{ route('employees') }}" style="color:#08A7C3">List</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('action_edit_employee',$id)}}" method="POST">
                {{ method_field('PUT') }}
                @include('employee._form')
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        @can('edit_employees')
                            <button type="submit" class="btn btn-sm btn-info" name="edit_employee" value="edit_employee">
                                Update
                            </button>
                        @endcan
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection