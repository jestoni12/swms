@extends('layouts.master')

@section('title', ' - Employee')
@section('content_header', 'Generated Employee')

@section('content_header_link')
    <li class="active">List</li>
    @can('add_employees')
        <li><a href="{{ route('create_employee') }}" style="color:#08A7C3"><i class="glyphicon glyphicon-plus"></i> Add Employee</a></li>
    @endcan
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Employee Name</th>
                    <th>Job</th>
                     <th>Status</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($emps as $emp)
                    <tr>
                        <td>{{ $emp->id }}</td>
                        <td>{{ ucfirst($emp->firstname) }} {{ ucfirst($emp->middlename) }} {{ ucfirst($emp->lastname) }}</td>
                        <td>{{ ucfirst($emp->jobs->description) }}</td>
                        <td>{{ $emp->status }}</td>
                        <td>{{ $emp->created_at }}</td>
                        <td>
                            @can('edit_employees')
                                <a href="{{route('edit_employee', $emp->id)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Edit</a>
                            @endcan
                            @can('delete_employees')
                                <form action="{{route('delete_employee',$emp->id)}}" style="display: inline" onclick="return confirm('Do you really want to delete it?')" method="POST">
                                    {{csrf_field()}}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn-delete btn btn-xs btn-danger" name="delete_employee" value="delete_employee">
                                        <i class="glyphicon glyphicon-trash"></i>
                                    </button>
                                </form>
                            @endcan
                            @can('add_employess')
                                <a href="#" data-toggle="modal" data-target="#barcode" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-qrcode"></i> Barcode</a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
        </div>
    </div>
    @if(isset($emp))
        <div class="modal fade" id="barcode" tabindex="-1" role="dialog" aria-labelledby="barcodeModalLabel">
            <div class="modal-dialog" role="barcode" style="width: 20%;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="roleModalLabel">Generate Barcode</h4>
                    </div>
                    <div class="modal-body">
                        <!-- name Form Input -->
                        <div class="form-group">
                            <div class="container text-center" style="border: 1px solid #a1a1a1;padding: 15px;width: 70%;">
                                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($emp->id, 'C39')}}" alt="barcode" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="{{route('print_barcode',$emp->id)}}" style="display: inline" method="POST">
                            {{csrf_field()}}
                            <a><button type="submit" class="btn btn-success" name="barcode" value="barcode" target="_blank"><i class="glyphicon glyphicon-qrcode"></i> Print</button></a>
                        </form>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
