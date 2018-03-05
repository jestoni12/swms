<!DOCTYPE html>
<html>
<head>
	<title>Waste Reports</title>
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
        font-size: 10px;
    }
    .circle1{
        border-top: 1px solid black;
        border-right: 1px solid black;
        border-left: 1px solid black;
    }
</style>
<body>
    <div style="text-align: center;font-size: 10pt;">
        Republic of the Philippines<br>
        Office of Ecological Solid Waste Management<br>
        Poblacion Tabango, Leyte
    </div><br>
    <div style="text-align: center;">
        <h4>Report of Fertilizer Record</h4>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <td style="width: 78%;"><b>Total Weight: {{ number_format($sum,0,'',',') }} kg</b></td>
                    <td><b>Date : {{ date('M-d-Y') }}</b></td>
                </tr>
            </thead>
        </table>
    </div><br>
	<table class="circle1" cellpadding="4" cellspacing="0">
        <thead>
        <tr>
            <th class="circle2" style="text-align:center;width: 30%;">USER</th>
            <th class="circle2" style="text-align:center;width: 30%;">TYPE OF WASTE</th>
            <th class="circle2" style="text-align:center;width: 20%;">AMOUNT</th>
            <th class="circle2" style="text-align:center;width: 20%;">DATE RECORDED</th>
        </tr>
        </thead>
        <tbody>
        @foreach($results as $result)
            <tr>
                <td class="circle2" style="text-align:center;">{{ ucfirst($result->users->firstname) }} {{ ucfirst($result->users->middlename) }} {{ ucfirst($result->users->lastname) }}</td>
                <td class="circle2" style="text-align:center;">{{ $result->type }}</td>
                <td class="circle2" style="text-align:center;">{{ $result->amount_in_kilo }} kg</td>
                <td class="circle2" style="text-align:center;">{{ $result->created_at->toFormattedDateString() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>