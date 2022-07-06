<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::view('welcome','welcome');
Route::view('registration','registration');
Route::post('registration',[usercontroller::class,'Adduser']);
Route::post('login',[usercontroller::class,'login']);
Route::view('login','login');
Route::view('aboutus','aboutus');
Route::view('admin','admin');
Route::view('contact','contact');
Route::post('contact',[usercontroller::class,'incontact']);
Route::get('admincontactview',[usercontroller::class,'contactview']);
Route::get('deletecontact/{id}',[usercontroller::class,'deletecontact']);
Route::view('adminoption','adminoption');
Route::view('schedules','schedules');
Route::post('admin',[usercontroller::class,'add']);
Route::post('schedules',[usercontroller::class,'Schedules']);
Route::get('adminviewschedules',[usercontroller::class,'viewschedule']);
Route::get('deleteSchedules/{id}',[usercontroller::class,'deleteSchedules']);
Route::get('edit/{id}',[usercontroller::class,'showdata']);
Route::post('edit',[usercontroller::class,'updata']);
Route::get('userviewschedule',[usercontroller::class,'userviewschedule']);
Route::view('booking','booking');
Route::post('booking',[usercontroller::class,'booked']);
Route::get('adminviewbooking',[usercontroller::class,'abookingview']);
Route::get('delete/{id}',[usercontroller::class,'deletebooking']);
Route::get('editbooking/{id}',[usercontroller::class,'showdatabooking']);
Route::post('editbooking',[usercontroller::class,'updatabooking']);
Route::get('userviewbooking',[usercontroller::class,'userviewbooking']);
Route::view('admininsertdriver','admininsertdriver');
Route::post('admininsertdriver',[usercontroller::class,'driver']);
Route::get('admindriverview',[usercontroller::class,'driverview']);
Route::get('deletedriver/{id}',[usercontroller::class,'deletedriver']);
Route::get('userviewdriver',[usercontroller::class,'udriverview']);
Route::get('search',[usercontroller::class,'search']);
Route::get('searchroute',[usercontroller::class,'searchroute']);
Route::get('searchdestination',[usercontroller::class,'searchdestination']);
Route::get('searchtime',[usercontroller::class,'searchtime']);
