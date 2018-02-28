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
	<table class="circle1" id="data-table" style="" cellpadding="10" cellspacing="0">
            <thead>
            <tr>
                <th class="circle2">ID</th>
                <th class="circle2">Employee</th>
                <th class="circle2">Generated Barcode</th>
                <th class="circle2">Created At</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="circle2" style="text-align: center;">{{ $results->id }}</td>
                    <td class="circle2" style="text-align: center;">{{ ucfirst($results->firstname) }} {{ ucfirst($results->middlename) }} {{ ucfirst($results->lastname) }}</td>
                    <td class="circle2" style="text-align: center;"><img src="data:image/png;base64,{{DNS1D::getBarcodePNG($results->id, 'EAN13',2,50) }}" alt="barcode"   /></td>
                    <td class="circle2" style="text-align: center;">{{ $results->created_at->toFormattedDateString() }}</td>
                </tr>
            </tbody>
        </table>
</body>
</html>