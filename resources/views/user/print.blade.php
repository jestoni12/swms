<!DOCTYPE html>
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
    .circle2{
        border-bottom: 1px solid black;
    }
    .circle1{
        border-top: 1px solid black;
        border-right: 1px solid black;
        border-left: 1px solid black;
    }
</style>
<body>
	<div>
		<h2>List Of Users</h2>
	</div>
	<br/>
	<table class="circle1" id="data-table">
        <thead>
        <tr>
            <th class="circle2">User ID</th>
            <th class="circle2">Name</th>
            <th class="circle2">Username</th>
            <th class="circle2">Role</th>
            <th class="circle2">Status</th>
            <th class="circle2">Created At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="circle2" style="padding-left: 30px;">{{ $user->id }}</td>
                <td class="circle2">{{ ucfirst($user->firstname) }} {{ ucfirst($user->middlename) }} {{ ucfirst($user->lastname) }}</td>
                <td class="circle2">{{ $user->username }}</td>
                <td class="circle2">{{ $user->roles->implode('name', ', ') }}</td>
                <td class="circle2">{{ $user->status }}</td>
                <td class="circle2">{{ $user->created_at->toFormattedDateString() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>