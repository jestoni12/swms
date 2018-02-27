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
                                    <th class="circle2">Login</th>
                                    <th class="circle2">Logout</th>
                                    <th class="circle2">Login</th>
                                    <th class="circle2">Logout</th>
                                    <th class="circle2">Login</th>
                                    <th class="circle2">Logout</th>
                                    <th class="circle2">Login</th>
                                    <th class="circle2">Logout</th>
                                    <th class="circle2">Login</th>
                                    <th class="circle2">Logout</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $result)
                                    @if($emp->id == $result->employee_id)
                                        <tr>
                                            <td class="circle2" style="text-align: center;">{{ date('m/d/y',strtotime($result->log_date)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->login1 == '' ? '' : date('H:i:s A',strtotime($result->login1)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->logout1 == '' ? '' : date('H:i:s A',strtotime($result->logout1)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->login2 == '' ? '' : date('H:i:s A',strtotime($result->login2)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->logout2 == '' ? '' : date('H:i:s A',strtotime($result->logout2)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->login3 == '' ? '' : date('H:i:s A',strtotime($result->login3)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->logout3 == '' ? '' : date('H:i:s A',strtotime($result->logout3)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->login4 == '' ? '' : date('H:i:s A',strtotime($result->login4)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->logout4 == '' ? '' : date('H:i:s A',strtotime($result->logout4)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->login5 == '' ? '' : date('H:i:s A',strtotime($result->login5)) }}</td>
                                            <td class="circle2" style="text-align: center;">{{ $result->logout5 == '' ? '' : date('H:i:s A',strtotime($result->logout5)) }}</td>
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