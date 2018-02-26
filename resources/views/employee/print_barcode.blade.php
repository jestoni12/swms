<!DOCTYPE html>
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
		<h2>Employee Barcode</h2>
	</div>
	<br/>
	<table class="circle1" id="data-table" style="">
            <thead>
            <tr>
                <th class="circle2">ID</th>
                <th class="circle2">User</th>
                <th class="circle2">Generated Barcode</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="circle2">{{ $results->id }}</td>
                    <td class="circle2">{{ ucfirst($results->firstname) }} {{ ucfirst($results->middlename) }} {{ ucfirst($results->lastname) }}</td>
                    <td class="circle2"><img src="data:image/png;base64,{{DNS1D::getBarcodePNG($results->id, 'C39')}}" alt="barcode" /></td>
                </tr>
            </tbody>
        </table>
</body>
</html>