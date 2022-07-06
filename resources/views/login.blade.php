@extends('css')
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
<form action="login" method="POST" align="center">

  <div class="form-group">
    @csrf
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div><br><br>
 
 
 
  <button type="submit" class="btn btn-default">Login</button>
  <a class="reg" href="registration">Registration</a>
</form>
 </div>
  </div>
  </div>
  <style>

body {
 background-image: url("https://pbs.twimg.com/media/FLsM1uMUUAYPyBU?format=jpg&name=large");
 background-repeat: no-repeat;
background-position: center;
background-size: cover;
font-size: 45px;




}
.form-group{
  font-color: white;
}
</style>
