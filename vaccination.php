<?php
error_reporting(0);
session_start();
include "dbconnection1.php";
$message='';
if(isset($_POST['vaccination'])){
$type=$_POST['type'];
$age=$_POST['age'];
$dose=$_POST['dose'];
$date=$_POST['date'];
$slot=$_POST['slot'];
$email=$_SESSION['username'];
$sql="insert into vaccination values('','$type','$age','$dose','$slot','$date','$email')";
$result=mysqli_query($con,$sql);
header('location:login.php');
if($result)
{	 
 $message='registration added succesfully';
}else{
//$message='error in query';
}
}
?>



<html>
<head>
<body>
<center>
<title>vaccination Form</title><br><br>
<link rel="stylesheet" href="home.css">
<Body background="2348994.jpg"> <br>
<div class="wrapper">
<nav class="navbar">
<img class="logo" align="left" src="download.jpg">	
<ul><li><a class=active href="login.php">Logout</a></li></ul></nav><br>
<h1 style="font-size:5vw;">vaccination</h1><br><br>
<form action="vaccination.php" method="post"> 
<center>
			
			<label><font size=5>Type:</label>
			<input type="radio" name="type" value="covaxine">Covaxine
			<input type="radio" name="type" value="covishild">Covishild
			<input type="radio" name="type" value="sputnikv">Sputnik-V<br><br>

			<label>Dose:</label>
			<input type="radio" name="dose" value="1st">1st
			<input type="radio" name="dose" value="2nd">2nd<br><br>

			<label>Age:</label>
			<input type="radio" name="age" value="18">18+
			<input type="radio" name="age" value="45">45+<br><br>

			<label>Date:</label>
			<input type="date" name="date" ><br><br>

			<label>Slot:</label>
			<input type="radio" name="slot" value="10:00-12:00">10:00-12:00
			<input type="radio" name="slot" value="14:00-17:00">14:00-17:00<br><br>
    
			<input type="submit" name="vaccination" value="next"> 
			<input type="reset" name="reset" value="cancel">
</div>       
</form>
</center>
</body>
</html>