<<!DOCTYPE html>
<html>
<head>
	<title>Employee Barcode</title>
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
		<h2>Employee Barcode</h2>
	</div>
	<br/>
	<table class="table table-striped table-hover" id="data-table" style="">
            <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Generated Barcode</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $results->id }}</td>
                    <td>{{ ucfirst($results->firstname) }} {{ ucfirst($results->middlename) }} {{ ucfirst($results->lastname) }}</td>
                    <td><img src="data:image/png;base64,{{DNS1D::getBarcodePNG($results->id, 'C39')}}" alt="barcode" /></td>
                </tr>
            </tbody>
        </table>
</body>
</html>