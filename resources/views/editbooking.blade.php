<h1>Update Booking</h1>
<body>
<form action="/editbooking" method="POST">
	@csrf
	<input type="hidden" name="id" value="{{$booking['id']}}">
	<input type="text" name="sit_num" value="{{$booking['sit_num']}}"><br>
	<input type="text" name="payment" value="{{$booking['payment']}}"><br>
	<input type="text" name="booking_stu" value="{{$booking['booking_stu']}}"><br><br>
	
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