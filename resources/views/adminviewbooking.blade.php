<h1>Booking List</h1>
<body>
<table border="1">
	<tr>
	<th>Student ID</th>
	<th>Email</th>
	<th>Transiction ID</th>
	<th>Destination Location</th>
	<th>Sit Number</th>
	<th>Phone Number</th>
	<th>Payment Status</th>
    <th>Booking Status</th>
	<th>Delete</th>
	<th>Update</th>
	
    </tr>
	@foreach($bookings as $booking)
	<tr>
	<td>{{$booking['stu_id']}}</td>
	<td>{{$booking['email']}}</td>
	<td>{{$booking['trans_id']}}</td>
	<td>{{$booking['des_loc']}}</td>
	<td>{{$booking['sit_num']}}</td>
    <td>{{$booking['phone']}}</td>
    <td>{{$booking['payment']}}</td>
    <td>{{$booking['booking_stu']}}</td>
	<td><a href={{"delete/".$booking['id']}}>Delete</a></td>
	<td><a href={{"editbooking/".$booking['id']}}>Edit</a></td>

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
