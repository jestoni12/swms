@extends('layouts.master')

@section('title', ' - Trucks')

@section('content_header', 'Edit Truck - '.$truck->name)

@section('content_header_link')
    <li ><a href="{{ route('trucks.index') }}" style="color:#08A7C3">List</a></li>
    @can('add_users')
        <li><a href="{{ route('trucks.create') }}" style="color:#08A7C3"><i class="glyphicon glyphicon-plus"></i> Create Truck</a></li>
    @endcan
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('trucks.update',$truck->id)}}" method="POST">
                {{ method_field('PATCH') }}
                @include('truck._form')
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-sm btn-info">
                            Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection