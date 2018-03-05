<!DOCTYPE html>
<html>
<head>
	<title>Fertilizer Reports</title>
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
		<h2>List of Fertilizer</h2>
	</div>
    <div>
        Total Amount : {{ $sum }}
    </div><br>
	<table class="circle1" cellpadding="4" cellspacing="0">
        <thead>
            <tr>
                <th class="circle2">USER</th>
                <th class="circle2">FERTILIZER AMOUNT</th>
                <th class="circle2">DATE RECORDED</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td class="circle2" style="text-align: center;">{{ ucfirst($result->users->firstname) }} {{ ucfirst($result->users->middlename) }} {{ ucfirst($result->users->lastname) }}</td>
                    <td class="circle2" style="text-align: center;">{{ $result->amount_fertilizers }}</td>
                    <td class="circle2" style="text-align: center;">{{ $result->created_at->toFormattedDateString() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>