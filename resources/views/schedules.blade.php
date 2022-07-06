<body>
    <h1>Insert Schedule</h1>
<form action="schedules" method="POST" >
@csrf
<input type="text" name="Start_Time" placeholder="Enter Start Time"/><br>
<input type="text" name="Bus_No" placeholder="Enter Bus Number"/><br>
<input type="text" name="pre_loc" placeholder="Enter Previous Location"/><br>
<input type="text" name="des_loc" placeholder="Enter Destination Location"/><br>
<input type="text" name="des_time" placeholder="Enter Destination time"/><br></br>
<input type="text" name="route" placeholder="Enter Route"/><br></br>
<input type="text" name="time_in" placeholder="Enter Interval time"/><br></br>
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