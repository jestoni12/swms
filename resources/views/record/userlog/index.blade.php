@extends('layouts.master')

@section('title', ' - User Logs')

@section('content_header')
    User Logs
@endsection

@section('content_header_link')
    <li class="active">List</a></li>
@endsection

@section('content')
    <div class="result-set">
        <table class="table table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Role</th>
                <th>Last Logged Date Time</th>
                <th>Log Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <?php
                    $log = $item->userlogs->first();
                ?>
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ ucfirst($item->firstname) }} {{ ucfirst($item->middlename) }} {{ ucfirst($item->lastname) }}</td>
                    <td>{{ $item->roles->implode('name', ', ') }}</td>
                    @if($log)
                        <td>{{ date('l, F d Y | H:i:s A', strtotime($log['created_at'])) }}</td>
                        <td>{{ ($log['status'] == 'in') ? 'Logged In' : 'Logged Out'}}</td>
                    @else
                        <td></td>
                        <td></td>
                    @endif
                    <td class="text-center">
                        @can('view_user_logs')
                            <a href="{{ route('show_logs')  }}" class="btn btn-xs btn-info" style="display: none;">
                                <i class="fa fa-file-text"></i> View</a>
                            <a href="{{ route('printlogs')  }}" target="_blank" class="btn btn-xs btn-info" style="display: none;">
                                <i class="fa fa-print"></i> Print</a>
                        @endcan
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-center">
            {{ $result->links() }}
        </div>
    </div>

@endsection