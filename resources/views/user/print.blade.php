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
        text-align: center;
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
	<table class="circle1" id="data-table" cellspacing="0" cellpadding="2">
        <thead>
        <tr>
            <th class="" style="text-align: left;border-bottom: 1px solid black;width: 30%;">Name</th>
            <th class="circle2" style="width: 20%;">Username</th>
            <th class="circle2" style="width: 15%;">Role</th>
            <th class="circle2" style="width: 20%;">Status</th>
            <th class="circle2" style="width: 15%;">Created At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td class="" style="border-bottom: 1px solid black;">{{ ucfirst($user->firstname) }} {{ ucfirst($user->middlename) }} {{ ucfirst($user->lastname) }}</td>
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