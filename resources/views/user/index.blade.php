@extends('layouts.master')

@section('title', ' - Users')

@section('content_header')
    {{ $result->total() }}  {{ str_plural('User', $result->count()) }}
    <h3 style="margin-top: -25px;margin-left: 90%;" title="Search User"><a href="#" data-toggle="modal" data-target="#user_search"><span class="menu-icon glyphicon glyphicon-search"></span></a></h3>
@endsection

@section('content_header_link')
    <li class="active">List</a></li>
    @can('add_users')
        <li><a href="{{ route('users.create') }}" style="color:#08A7C3"><i class="glyphicon glyphicon-plus"></i> Create User</a></li>
    @endcan
@endsection

@section('content')
    <div class="result-set">
        <div class="row">
            <div class="col-sm-1">
                @if(isset($user))
                    <a href="{{route('print_user')}}?user={{$user}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-print"></i>List of User</a>
                @else
                    <a href="{{route('print_user')}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-print"></i>List of User</a>
                @endif
            </div>
            <div class="col-sm-1" style="padding-bottom:10px;display: none;">
                <a href="{{route('print_user_barcode')}}" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-print"></i> Print Barcode</a>
            </div>
        </div>
        <table class="table table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>NAME</th>
                <th>USERNAME</th>
                @can('edit_users', 'delete_users')
                <th class="text-center">ACTIONS</th>
                @endcan
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <tr>
                    <td>{{ ucfirst($item->firstname) }} {{ ucfirst($item->middlename) }} {{ ucfirst($item->lastname) }}</td>
                    <td>{{ ucfirst($item->username) }}</td>
                    @can('edit_users')
                    <td class="text-center">
                        @include('shared._actions', [
                            'entity' => 'users',
                            'id' => $item->id
                        ])
                        <form action="{{ route('users.update',$item->id)}}" style="display: inline;"  method="POST">
                            {{csrf_field()}}
                            {{ method_field('PATCH') }}
                            @if($item->id == 1)
                                <button style="width: 60px;" type="submit" name="active" value="Active" class="btn-success btn btn-xs btn-success" disabled="">Active</button>
                            @else
                                @if($item->status == 'Active')
                                    <button style="width: 60px;" type="submit" name="active" value="Active" class="btn-success btn btn-xs btn-success">Active</button>
                                @else
                                    <button type="submit" name="inactive" value="Inactive" class="btn-danger btn btn-xs btn-danger">Inactive</button>
                                @endif
                            @endif
                        </form>
                    </td>
                    @endcan
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-center">
            {{ $result->links() }}
        </div>
    </div>
    <div class="modal fade" id="user_search" role="dialog">
        <div class="modal-dialog modal-sm" style="width: 25%;margin-top: 40px;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><b>User Search</b></h4>
                </div>
                <div class="modal-body form-horizontal">
                    <form class="form-horizontal" autocomplete="off"  name="user_search_form" id="user_search_form" role="form"  method="POST" action="">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-md-4 control-label">User :</label>
                            <div class="col-md-8">
                                 <input type="text" class="form-control user_name" placeholder="User" name="user_name" value="" id="user_name">
                            </div>
                        </div>
                   </form>
                </div>
                <div class="modal-footer">
                    <button id="search-btn" class="btn btn-sm search-btn" type="submit" form="user_search_form" style="margin-top:-7px; float: right; background-color:#a6a6a6;font-weight:200;color:#0d0d0d;height:28px;border:1px solid #8c8c8c;" value="search-btn" name="search-btn">&nbsp;<span class="menu-icon glyphicon glyphicon-search"></span> Search</button>
                </div>
            </div>
        </div>
    </div>
    @push('append_js')
        <script type="text/javascript">
            $(document).ready(function(){
                function submitfunc(){
                    var user = $('.user_name').val().trim();
                    window.history.pushState("", "", '{{ url("users/search") }}?user='+user);
                    window.location.reload(); 
                }
                $(".search-btn").click(function() {
                    submitfunc();
                });
            });
        </script>
    @endpush
@endsection