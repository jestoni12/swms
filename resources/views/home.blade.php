@extends('layouts.master')

@section('title', ' - Home')

@section('content_header', 'Dashboard')

@section('content')
	<div class="row">
        <div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>
				<div class="panel-body">
					<h4> Welcome <b>{{Auth::user()->username}}</b></h4>
				</div>
			</div>
        </div>
    </div>
@endsection
