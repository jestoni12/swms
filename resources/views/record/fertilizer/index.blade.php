@extends('layouts.master')

@section('title', ' - Fertilizer')
@section('content_header', 'Generated Fertilizer')

@section('content_header_link')
    <li class="active">List</li>
    <li><a href="{{ route('create_fertilizer') }}" style="color:#08A7C3">Add Fertilizer</a></li>
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Users</th>
                <th>Fertilizer name</th>
                <th>Fertilizer remarks</th>
                <th>Generated Kilogram</th>
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
