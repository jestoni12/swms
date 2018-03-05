@extends('layouts.master')

@section('title', ' - Fertilizer')

@section('content_header')
    <h3>Edit Fertilizers</h3>
@endsection

@section('content_header_link')
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
                        <button type="submit" class="btn btn-sm btn-info" name="edit_fertilizer" value="edit_fertilizer">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection