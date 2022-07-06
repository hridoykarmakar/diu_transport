<h1>Driver List</h1>
<body>
<table border="1">
	<tr>
	<th> Driver Name</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Bus Number</th>
	<th>Location</th>
    <th>Delete</th>
	
	
    </tr>
	@foreach($driver as $driver)
	<tr>
	<td>{{$driver['name']}}</td>
	<td>{{$driver['contact']}}</td>
	<td>{{$driver['email']}}</td>
	<td>{{$driver['bus_num']}}</td>
	<td>{{$driver['loc']}}</td>
    <td><a href={{"deletedriver/".$driver['id']}}>Delete</a></td>
    

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
	table{
		margin-left: 10px;
	}
	
</style>
