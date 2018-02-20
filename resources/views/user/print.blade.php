<<!DOCTYPE html>
<html>
<head>
	<title>User's List</title>
</head>
<style type="text/css">
	table{
		width: 100%;
	}
	th,td{
		padding-left: 7px;
		padding-right: 7px;
	}
	h2{
		text-align: center;
	}
</style>
<body>
	<div>
		<h2>List Of Users</h2>
	</div>
	<br/>
	<table class="table table-striped table-hover" id="data-table">
        <thead>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td style="padding-left: 30px;">{{ $user->id }}</td>
                <td>{{ ucfirst($user->firstname) }} {{ ucfirst($user->middlename) }} {{ ucfirst($user->lastname) }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->roles->implode('name', ', ') }}</td>
                <td>{{ $user->status }}</td>
                <td>{{ $user->created_at->toFormattedDateString() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>