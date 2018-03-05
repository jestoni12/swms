@extends('layouts.master')

@section('title', ' - Garbage')

@section('content_header', 'Edit Garbage')

@section('content_header_link')
    <li ><a href="{{ route('garbage') }}" style="color:#08A7C3">List</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('action_edit_garbage',$id)}}" method="POST">
                {{ method_field('PUT') }}
                @include('record.garbage._form')
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-sm btn-info" name="edit_garbage" value="edit_garbage">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection