
<body>
	
<h1>Bus Schedules</h1>
<table border="1">
	<tr>
	<th>Start Time</th>
	<th>Bus Number</th>
	<th>Previous Location</th>
	<th>Destination Location</th>
	<th>Destination Time</th>
	<th>Route</th>
	<th>Interval Time</th>
	
    </tr>
	@foreach($bus as $bus)
	<tr align="center">
	<td>{{$bus['Start_Time']}}</td>
	<td>{{$bus['Bus_No']}}</td>
	<td>{{$bus['pre_loc']}}</td>
	<td>{{$bus['des_loc']}}</td>
	<td>{{$bus['des_time']}}</td>
	<td>{{$bus['route']}}</td>
	<td>{{$bus['time_in']}}</td>
	</tr>
	@endforeach
	
</table>
</body>
<style type="text/css">
	td{
		height: 40px;
		width: 250px;
		margin-top: 80px;
		margin-left: 600px;
		background-color: #f5f5f5;
		
	}
	h1{
		margin-top: 150px;
		margin-left: 550px;
		color : black;
	}
	
	body{
		background:	#98FB98;
		color: blue;
	}
	th{
		background-color:	#00FF7F;
	}
	
</style>