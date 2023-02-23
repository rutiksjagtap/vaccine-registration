<?php
error_reporting(0);
session_start();
include"dbconnection.php";
$message="";
if(isset($_POST['submit']))
{
$a=$_POST['username'];
$p=$_POST['password'];
$sql="select * from admin where email='$a' and password='$p'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
$_SESSION['username']=$a;

header('location:ahome.php');
}
 else
{
$message="invalid id or password";
}
}
setcookie('email',$_POST['username']);
?>



<html>
<head>
<title>Log In</title><link rel="stylesheet" href="home.css">
<Body background="2348994.jpg"> <br>  
<div class="wrapper">
			<nav class="navbar">
			<img class="logo" align="left" src="download.jpg">	
                
				<ul>
					
					<li><a class=active href="home.html">Home</a></li>
					
					
				</ul>
			</nav>
<head>
<style>
body {
  background-color: coral;
}
</style>
</head>
<body>
</head>
<body>
<div class="box">
<h4>
<center>
<div class="login">
<img src="circle-cropped (1).png">
</div>

<h1>Admin Login Here</h1>

<form name="myform" method="post" action="adminlogin.php"  >  

Email
<br>
<input type="email" id="myEmail" name="username" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email ID">
<br><br>

PASSWORD
<br>
<input type="password" name="password" placeholder="Enter Password" required>
<br><br>

<input type="submit" name="submit" value="LogIn">

<br>


</form>
</center>
</h4>
</div>
</body>
</html>