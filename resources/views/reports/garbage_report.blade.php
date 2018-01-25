<<!DOCTYPE html>
<html>
<head>
	<title>Garbage Reports</title>
</head>
<style type="text/css">
	table{
		width: 100%;
	}
	th,td{
		padding-left: 7px;
		padding-right: 7px;
        font-size: 12px;
	}
	h2{
		text-align: center;
        font-size: 16px;
	}
</style>
<body>
	<div>
		<h2>List of Garbage</h2>
	</div>
	<br/>
	<table class="table table-striped table-hover" id="data-table" style="">
            <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Description</th>
                <th>Remarks</th>
                <th style="text-align:center;">Total Weight</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->id }}</td>
                    <td>{{ ucfirst($result->users->firstname) }} {{ ucfirst($result->users->middlename) }} {{ ucfirst($result->users->lastname) }}</td>
                    <td>{{ $result->description }}</td>
                    <td>{{ $result->remarks }}</td>
                    <td style="text-align:center;">{{ $result->total_weight }}</td>
                    <td>{{ $result->created_at->toFormattedDateString() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</body>
</html>