<h1>Contact List</h1>
<table border="1">
	<tr>
	<th>Name</th>
	<th>Email</th>
	<th>Message</th>
    <th>Delete</th>

    </tr>
	@foreach($contact as $contact)
	<tr>
	<td>{{$contact['name']}}</td>
	<td>{{$contact['email']}}</td>
	<td>{{$contact['msg']}}</td>
	
    <td><a href={{"deletecontact/".$contact['id']}}>Delete</a></td>
    

    </tr>
	@endforeach
	
</table>