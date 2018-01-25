<div>
	@if($thismsg['status'] == "error")
		@if($thismsg['from'] == "check")
			<div class="alert alert-danger">
				Unknown Employee.
			</div>
		@elseif($thismsg['from'] == "timeout")
			<div class="alert alert-warning">
				You reached the maximum limit to Login and Logout for Today.
			</div>
		@else
			<div class="alert alert-danger">
				Something went wrong. Please Try again.
			</div>
		@endif
	@else
		<div class="alert alert-success">
			<?php
				$rev = strrev($thismsg['from']);
				$rev = substr($rev, 1);
				$orig = ucfirst(strrev($rev));
			?>
			You Are Successfully {{$orig}}.
		</div>
	@endif
	@if($thismsg['from'] != "check" && count($log) > 0)
		<div class="employee-detail">
			<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ID : </span>  &nbsp;&nbsp;<img src="data:image/png;base64,{{DNS1D::getBarcodePNG($log->employee_id, "EAN13",1,40) }}" alt="barcode"   />
		</div>
		<div class="employee-detail">
			<span> Name : </span> &nbsp;&nbsp;&nbsp;{{ucfirst($log->getemployee->firstname)}} {{ucfirst($log->getemployee->middlename)}} {{ucfirst($log->getemployee->lastname)}}
		</div>
		<div class="employee-detail">
			<span> &nbsp;&nbsp;&nbsp;&nbsp;Job : </span> &nbsp;&nbsp;&nbsp;{{ucfirst($log->getemployee->jobs->description)}}
		</div>
		<br/>
		<table class="dtr" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th>Day</th>
					<th>Date</th>
					<th>Login</th>
					<th>Logout</th>
					<th>Login</th>
					<th>Logout</th>
					<th>Login</th>
					<th>Logout</th>
					<th>Login</th>
					<th>Logout</th>
					<th>Login</th>
					<th>Logout</th>
				</tr>
			</thead>
			<tbody>
				@foreach($getlast7days as $day)
					<tr>
						<td>
							{{date('D',strtotime($day->log_date))}}
						</td>
						<td>
							{{$day->log_date}}
						</td>
						<td>
							@if(!is_null($day->login1) && $day->login1 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->login1))}}
							@endif
						</td>
						<td>
							@if(!is_null($day->logout1) && $day->logout1 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->logout1))}}
							@endif
						</td>
						<td>
							@if(!is_null($day->login2) && $day->login2 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->login2))}}
							@endif
						</td>
						<td>
							@if(!is_null($day->logout2) && $day->logout2 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->logout2))}}
							@endif
						</td>
						<td>
							@if(!is_null($day->login3) && $day->login3 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->login3))}}
							@endif
						</td>
						<td>
							@if(!is_null($day->logout3) && $day->logout3 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->logout3))}}
							@endif
						</td>
						<td>
							@if(!is_null($day->login4) && $day->login4 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->login4))}}
							@endif
						</td>
						<td>
							@if(!is_null($day->logout4) && $day->logout4 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->logout4))}}
							@endif
						</td>
						<td>
							@if(!is_null($day->login5) && $day->login5 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->login5))}}
							@endif
						</td>
						<td>
							@if(!is_null($day->logout5) && $day->logout5 != '0000-00-00 00:00:00')
								{{date('H:i:s',strtotime($day->logout5))}}
							@endif
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@endif
	<br/>
	<div>
		<a href="#"  style="text-decoration:none" title="Close" class="btn btn-default btn-sm btnclose"> Close</a>
	</div>
</div>
<script type="text/javascript">
	$('.btnclose').click(function(e){
		e.preventDefault();
		$(".show-logs").fadeOut("slow");
	});
</script>