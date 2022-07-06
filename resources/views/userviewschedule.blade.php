
<body>
	<form action="search">
		<input type="text" name="s" placeholder="search bus number">
		<button type="submit">submit</button>
		@csrf
</form>
<form action="searchroute">
		<input type="text" name="r" placeholder="search route">
		<button type="submit">submit</button>
		@csrf
</form>
<form action="searchdestination">
		<input type="text" name="d" placeholder="search destination">
		<button type="submit">submit</button>
		@csrf
</form>
<form action="searchtime">
		<input type="text" name="t" placeholder="search time interval">
		<button type="submit">submit</button>
		@csrf
</form>
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
	@foreach($schedules as $schedule)
	<tr align="center">
	<td>{{$schedule['Start_Time']}}</td>
	<td>{{$schedule['Bus_No']}}</td>
	<td>{{$schedule['pre_loc']}}</td>
	<td>{{$schedule['des_loc']}}</td>
	<td>{{$schedule['des_time']}}</td>
	<td>{{$schedule['route']}}</td>
	<td>{{$schedule['time_in']}}</td>
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