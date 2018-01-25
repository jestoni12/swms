<<!DOCTYPE html>
<html>
<head>
	<title>User's barcode</title>
</head>
<style type="text/css">
	table{
		width: 100%;
	}
	th,td{
		padding-left: 7px;
		padding-right: 7px;
        padding-top: 10px;
        padding-bottom: 10px;
	}
	h2{
		text-align: center;
	}
</style>
<body>
	<div>
		<h2>List Of User's Barcode</h2>
	</div>
	<br/>
	<table class="table table-striped table-hover" id="data-table">
        <tbody>
        @foreach($users as $user)
            <tr>
                <td width="30%">
                    <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($user->id, "EAN13",2,60) }}" alt="barcode"   />
                </td>
                <td width="70%">
                    <div>
                       ID No. : {{str_pad($user->id,4,'0',STR_PAD_LEFT)}}
                    </div>
                    <div>
                        Name &nbsp;&nbsp;: {{ ucfirst($user->firstname) }} {{ ucfirst($user->middlename) }} {{ ucfirst($user->lastname) }}
                    </div>
                    <div>
                        Role &nbsp;&nbsp;&nbsp;&nbsp;: {{ $user->roles->implode('name', ', ') }}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>