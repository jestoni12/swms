<!DOCTYPE html>
<html>
<head>
	<title>Employee Dtr Reports</title>
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
        font-size: 7pt;
    }
    .circle1{
        border: 1px solid black;
    }
</style>
<body>
	<div>
		<h2>List of Employee Dtr</h2>
	</div>
	<br/>
    @foreach($emps as $k => $emp)
        @if($count == ($k+1))
            <table class="circle1" id="data-table" style="">
        @else
            <table class="circle1" id="data-table" style="page-break-after:always;">
        @endif
            <tbody>
                <tr>
                    <td>Name : {{ ucfirst($emp->firstname) }} {{ ucfirst($emp->middlename) }} {{ ucfirst($emp->lastname) }}</td>
                </tr>
                <tr>
                    <td>Jobs :&nbsp;&nbsp;&nbsp;{{ $emp->jobs->description }}</td>
                </tr>
                <tr>
                    <td>
                        <table style="border:1px solid black;">
                            <thead>
                                <tr>
                                    <th class="circle2">Date</th>
                                    <th class="circle2">Login1</th>
                                    <th class="circle2">Logout1</th>
                                    <th class="circle2">Login2</th>
                                    <th class="circle2">Logout2</th>
                                    <th class="circle2">Login3</th>
                                    <th class="circle2">Logout3</th>
                                    <th class="circle2">Login4</th>
                                    <th class="circle2">Logout4</th>
                                    <th class="circle2">Login5</th>
                                    <th class="circle2">Logout5</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $result)
                                    @if($emp->id == $result->employee_id)
                                        <tr>
                                            <td class="circle2">{{ date('m/d/y',strtotime($result->log_date)) }}</td>
                                            <td class="circle2">{{ $result->login1 == '' ? '' : date('H:i:s',strtotime($result->login1)) }}</td>
                                            <td class="circle2">{{ $result->logout1 == '' ? '' : date('H:i:s',strtotime($result->logout1)) }}</td>
                                            <td class="circle2">{{ $result->login2 == '' ? '' : date('H:i:s',strtotime($result->login2)) }}</td>
                                            <td class="circle2">{{ $result->logout2 == '' ? '' : date('H:i:s',strtotime($result->logout2)) }}</td>
                                            <td class="circle2">{{ $result->login3 == '' ? '' : date('H:i:s',strtotime($result->login3)) }}</td>
                                            <td class="circle2">{{ $result->logout3 == '' ? '' : date('H:i:s',strtotime($result->logout3)) }}</td>
                                            <td class="circle2">{{ $result->login4 == '' ? '' : date('H:i:s',strtotime($result->login4)) }}</td>
                                            <td class="circle2">{{ $result->logout4 == '' ? '' : date('H:i:s',strtotime($result->logout4)) }}</td>
                                            <td class="circle2">{{ $result->login5 == '' ? '' : date('H:i:s',strtotime($result->login5)) }}</td>
                                            <td class="circle2">{{ $result->logout5 == '' ? '' : date('H:i:s',strtotime($result->logout5)) }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    @endforeach
</body>
</html>