<h1>Update Schedule</h1>
<form align="center" action="adminupdateschedules/" method="POST" > 
@csrf
<input type="hidden" name="id" value="{{$schedule['id']}}"/>
Start Time : <input type="text" name="Start_Time" value="{{$schedule['Start_Time']}}"/><br></br>
Bus Number : <input type="text" name="Bus_No" value="{{$schedule['Bus_No']}}"/><br><br>
Previous Location : <input type="text" name="pre_loc" value="{{$schedule['pre_loc']}}"/><br><br>
Destination Location : <input type="text" name="des_loc" value="{{$schedule['des_loc']}}"/><br><br>
Destination Time : <input type="text" name="des_time" value="{{$schedule['des_time']}}"/><br><br>
Route : <input type="text" name="des_time" value="{{$schedule['des_time']}}"/><br><br>
Interval Time : <input type="text" name="des_time" value="{{$schedule['des_time']}}"/><br><br>
<button type="submit">Submit</button>
</form>