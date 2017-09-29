@extends('layouts.master')

@section('title', ' - User Logs')
@section('content_header', 'My Logs')

@section('content_header_link')
    <li><a href="{{ route('userlogs') }}" style="color:#08A7C3">List</a></li>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1>Currently Logged In  User Logs display here.. (buhatonun pani)</h1>
        </div>
    </div>
@endsection
