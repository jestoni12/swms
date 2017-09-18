@extends('layouts.master')

@section('title', ' - Users')

@section('content_header', 'Create User')

@section('content_header_link')
    <li class="active"><a href="{{ route('users.index') }}" style="color:#08A7C3">List</a></li>
    @can('add_users')
        <li class="active"><i class="glyphicon glyphicon-plus"></i> Create User</li>
    @endcan
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal" action="{{route('users.store')}}" method="POST">
                @include('user._form')
            </form>
        </div>
    </div>
@endsection