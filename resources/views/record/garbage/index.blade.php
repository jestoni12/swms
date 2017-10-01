@extends('layouts.master')

@section('title', ' - Garbage Weigh In')
@section('content_header', 'Garbage Weigh In')

@section('content_header_link')
    <li class="active">List</li>
    <li><a href="{{ route('create_garbage') }}" style="color:#08A7C3">Add Garbage</a></li>
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Users</th>
                <th>Garbage name</th>
                <th>Garbage remarks</th>
                <th>Garbage Kilogram</th>
                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>

        <div class="text-center">
        </div>
    </div>
@endsection
