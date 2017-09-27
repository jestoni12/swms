@extends('layouts.master')

@section('title', ' - Users')

@section('content_header', 'Edit User - '.$user->name)

@section('content_header_link')
    <li ><a href="{{ route('users.index') }}" style="color:#08A7C3">List</a></li>
    @can('add_users')
        <li><a href="{{ route('users.create') }}" style="color:#08A7C3"><i class="glyphicon glyphicon-plus"></i> Create User</a></li>
    @endcan
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <form class="form-horizontal" action="{{route('users.update',$user->id)}}" method="POST">
                {{ method_field('PATCH') }}
                @include('user._form')
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