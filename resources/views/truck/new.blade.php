@extends('layouts.master')

@section('title', ' - Trucks')

@section('content_header', 'Create Truck')

@section('content_header_link')
    <li><a href="{{ route('trucks.index') }}" style="color:#08A7C3">List</a></li>
    @can('add_users')
        <li class="active"><i class="glyphicon glyphicon-plus"></i> Create Truck</li>
    @endcan
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('trucks.store')}}" method="POST">
                @include('truck._form')
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-sm btn-info">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection