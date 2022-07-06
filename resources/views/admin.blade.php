
<body>
<form align="center" action="admin" method="POST" >
@csrf
Email<br>
<input type="text" name="email"/><br></br>
Password<br>
<input type="password" name="password"/><br><br>
<button type="submit">Submit</button>
</form>
</body>
<style>
form{
    margin-top: 250px;

    
}
body {
 background-image: url("https://pbs.twimg.com/media/FLsXS-jaMAYvIYZ?format=jpg&name=large");
 background-repeat: no-repeat;
background-position: center;
background-size: cover;
color: white;
font-weight: bold;
font-size: 25px;

}
input{
	padding: 5px;
}
button{
	font-size: 18px;
}
</style>