@extends('layouts.master')

@section('title', ' - No Permission')

@section('content_header', 'No Permission')

@section('content')
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2" style="text-align: center">
        	<h4>
        		YOU HAVE NO PERMISSION TO ACCESS THIS PAGE!
        	</h4>
        	<img src="{{ asset('assets/images/401.png') }}" >
        </div>
    </div>
@endsection