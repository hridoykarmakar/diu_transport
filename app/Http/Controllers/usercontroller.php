<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Booking;
use App\Models\Driver;
use App\Models\Contact;

class usercontroller extends Controller
{
    //

    function Adduser(Request $req){
        $user = new User;
        $user->std_id=$req->std_id;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        return redirect('welcome');
    }
    function login(Request $req)
    {
      $user= User::where(['email'=>$req->email])->first();
      if ($req->password!=$user->password && $req->email!=$user->email) {
        # code..
        return "username or password does not match";
      }
      else{
        $req->session()->put('user',$user);
        return redirect('welcome');
      }

    }
    function add(Request $req){
      if($req->email=="admin@gmail.com" && $req->password=="7856"){
        return redirect ("adminoption");
      }
      else{
        return "Wrong PassWord!!";
      }
    }
    function Schedules(Request $req){
        $schedule = new Schedule;
        $schedule->Start_Time=$req->Start_Time;
        $schedule->Bus_No=$req->Bus_No;
        $schedule->pre_loc=$req->pre_loc;
        $schedule->des_loc=$req->des_loc;
        $schedule->des_time=$req->des_time;
        $schedule->route=$req->route;
        $schedule->time_in=$req->time_in;
        $schedule->save();
        return redirect ("adminviewschedules");

    }
    function viewschedule(){
     // return view ("adminvtuiewschedules");
      $schedule = Schedule::all();
      return view('adminviewschedules',['schedules'=>$schedule]);
    }
    function deleteSchedules($id){
      $schedule = Schedule::find($id);
      $schedule->delete();
      return redirect ("adminviewschedules");

    }
    function showdata($id){
      $schedule= Schedule::find($id);
      return view('edit',['schedule'=>$schedule]);

    }
    function updata(Request $req){
      $schedule= Schedule::find($req->id);
      $schedule->Start_Time=$req->Start_Time;
      $schedule->Bus_No=$req->Bus_No;
      $schedule->pre_loc=$req->pre_loc;
      $schedule->des_loc=$req->des_loc;
      $schedule->des_time=$req->des_time;
      $schedule->route=$req->route;
      $schedule->time_in=$req->time_in;
      $schedule->save();
      return redirect ("adminviewschedules");
    }
    function userviewschedule(){
      // return view ("adminvtuiewschedules");
       $schedule = Schedule::all();
       return view('userviewschedule',['schedules'=>$schedule]);
     }
     function booked(Request $req){
      $booking = new Booking;
      $booking->stu_id=$req->stu_id;
      $booking->email=$req->email;
      $booking->trans_id=$req->trans_id;
      $booking->des_loc=$req->des_loc;
      $booking->sit_num=$req->sit_num;
      $booking->phone=$req->phone;
      $booking->payment="pending";
      $booking->booking_stu="pending";
      $booking->save();
      return redirect('booking');
  }
  function abookingview(){
    // return view ("adminvtuiewschedules");
     $booking = Booking::all();
     return view('adminviewbooking',['bookings'=>$booking]);
   }
   function deletebooking($id){
    $booking = Booking::find($id);
    $booking->delete();
    return redirect ("adminviewbooking");

   }
   function showdatabooking($id){
    $booking= Booking::find($id);
    return view('editbooking',['booking'=>$booking]);

  }
  function updatabooking(Request $req){
    $booking= Booking::find($req->id);
    $booking->sit_num=$req->sit_num;
    $booking->payment=$req->payment;
    $booking->booking_stu=$req->booking_stu;
    
    $booking->save();
    return redirect ("adminviewbooking");
  }
  function userviewbooking(){
    // return view ("adminvtuiewschedules");
     $booking = Booking::all();
     return view('userviewbooking',['booking'=>$booking]);
   }
   function driver(Request $req){
    $driver = new Driver;
    $driver->name=$req->name;
    $driver->contact=$req->contact;
    $driver->email=$req->email;
    $driver->bus_num=$req->bus_num;
    $driver->loc=$req->loc;
    
    $driver->save();
    return redirect('admininsertdriver');
}
function driverview(){
  // return view ("adminvtuiewschedules");
   $driver = Driver::all();
   return view('admindriverview',['driver'=>$driver]);
 }
 function deletedriver($id){
  $driver = Driver::find($id);
  $driver->delete();
  return redirect ("admindriverview");
 }
 function udriverview(){
  // return view ("adminvtuiewschedules");
   $driver = Driver::all();
   return view('userviewdriver',['driver'=>$driver]);
 }
 function incontact(Request $req){
  $contact = new Contact;
  $contact->name=$req->name;
  $contact->email=$req->email;
  $contact->msg=$req->msg;
  
  
  $contact->save();
  return redirect('contact');
}
function contactview(){
  // return view ("adminvtuiewschedules");
   $contact = Contact::all();
   return view('admincontactview',['contact'=>$contact]);
 }
 function deletecontact($id){
  $contact = Contact::find($id);
  $contact->delete();
  return redirect ("admincontactview");
 }
 function search(Request $req){
 $data= Schedule::where('Bus_No', 'like', '%'.$req->input('s').'%')->get();
 return view('search',['bus'=>$data]);

}
function searchroute(Request $req){
  $data= Schedule::where('route', 'like', '%'.$req->input('r').'%')->get();
  return view('search',['bus'=>$data]);
 
 }
 function searchdestination(Request $req){
  $data= Schedule::where('des_loc', 'like', '%'.$req->input('d').'%')->get();
  return view('search',['bus'=>$data]);
 
 }
 function searchtime(Request $req){
  $data= Schedule::where('time_in', 'like', '%'.$req->input('t').'%')->get();
  return view('search',['bus'=>$data]);
 
 }
}
