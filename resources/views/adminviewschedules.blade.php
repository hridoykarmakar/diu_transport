<h1>Bus Schedules</h1>
<body>
<table border="1">
	<tr>
	<th>Start Time</th>
	<th>Bus Number</th>
	<th>Previous Location</th>
	<th>Destination Location</th>
	<th>Destination Time</th>
	<th>Route</th>
	<th>Interval Time</th>
	<th>Delete</th>
	<th>Edit</th>
	
    </tr>
	@foreach($schedules as $schedule)
	<tr>
	<td>{{$schedule['Start_Time']}}</td>
	<td>{{$schedule['Bus_No']}}</td>
	<td>{{$schedule['pre_loc']}}</td>
	<td>{{$schedule['des_loc']}}</td>
	<td>{{$schedule['des_time']}}</td>
	<td>{{$schedule['route']}}</td>
	<td>{{$schedule['time_in']}}</td>
	<td><a href={{"deleteSchedules/".$schedule['id']}}>Delete</a></td>
	<td><a href={{"edit/".$schedule['id']}}>Edit</a></td>
	
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