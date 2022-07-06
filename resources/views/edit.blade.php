<h1>Update Schedules</h1>
<body>
<form action="/edit" method="POST">
	@csrf
	<input type="hidden" name="id" value="{{$schedule['id']}}">
	<input type="text" name="Start_Time" value="{{$schedule['Start_Time']}}"><br>
	<input type="text" name="Bus_No" value="{{$schedule['Bus_No']}}"><br>
	<input type="text" name="pre_loc" value="{{$schedule['pre_loc']}}"><br>
	<input type="text" name="des_loc" value="{{$schedule['des_loc']}}"><br>
	<input type="text" name="des_time" value="{{$schedule['des_time']}}"><br><br>
	<input type="text" name="route" value="{{$schedule['route']}}"><br><br>
	<input type="text" name="time_in" value="{{$schedule['time_in']}}"><br><br>
	<button type="submit">Submit</button>
	
</form>
</body>
<style type="text/css">
	input{
		height: 40px;
		width: 250px;
		margin-top: 50px;
		margin-left: 550px;
		background-color: white;
		color : black;
		
	}
    h1{
        margin-left: 550px;
    }
	
	
	button{
		border-radius: 10px;
		color: white;
		background: blue;
		margin-left: 830px;
		height: 30px;
	}
	body{
		background:#97EBF4;
		color: black;
	}
    
</style>