@extends('layouts.master')

@section('title', ' - Fertilizer')

@section('content_header', 'Edit Fertilizer')

@section('content_header_link')
    <li ><a href="{{ route('fertilizer') }}" style="color:#08A7C3">List</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('action_edit_fertilizer',$id)}}" method="POST">
                {{ method_field('PUT') }}
                @include('record.fertilizer._form')
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        @can('edit_fertilizers')
                            <button type="submit" class="btn btn-sm btn-info" name="edit_fertilizer" value="edit_fertilizer">
                                Update
                            </button>
                        @endcan
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection