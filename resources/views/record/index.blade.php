@extends('layouts.master')

@section('title', ' - Fertilizer')
@section('content_header', 'Recording')

@section('content_header_link')
    <li><a href="{{ route('create_garbage') }}" style="color:#08A7C3">Garbage</a></li>
    <li><a href="{{ route('create_fertilizer') }}" style="color:#08A7C3">Fertilizer</a></li>
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            
        </table>

        <div class="text-center">
        </div>
    </div>
@endsection
