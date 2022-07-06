<body><h1 align="center">Ticket Booking</h1>
<form action="booking" method="POST" >
@csrf
<input type="text" name="stu_id" placeholder="Enter Student ID" /><br>
<input type="text" name="email" placeholder="Enter Email"/><br>
<input type="text" name="trans_id" placeholder="Enter Transition ID"/><br>
<input type="text" name="des_loc" placeholder="Enter Destination"/><br>
<input type="text" name="sit_num" placeholder="Enter Sit Numer"/><br>
<input type="text" name="phone" placeholder="Enter Phone Number"/><br><br>
<button type="submit">Submit</button>
</form></body>
<style type="text/css">
	input{
		height: 40px;
		width: 250px;
		margin-top: 50px;
		margin-left: 550px;
		background-color: white;
		color : black;
		
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