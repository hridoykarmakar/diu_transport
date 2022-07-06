<h1>Driver List</h1>
<body>
<form action="admininsertdriver" method="POST" >
@csrf
<input type="text" name="name" placeholder="Enter Driver Name"/><br>
<input type="text" name="contact"placeholder="Enter Contact"/><br>
<input type="text" name="email"placeholder="Enter Email"/><br>
<input type="text" name="bus_num"placeholder="Enter Bus Number"/><br>
<input type="text" name="loc"placeholder="Enter locattion"/><br><br>

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