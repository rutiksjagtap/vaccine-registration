<?php
error_reporting(0);
session_start();
include "dbconnection1.php";
$message='';
if(isset($_POST['submit'])){
$type=$_POST['type'];
$age=$_POST['age'];
$dose=$_POST['dose'];

$sql="insert into registration values('','$type','$age','$dose')";
$result=mysqli_query($con,$sql);
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
<title>Slot Booking</title><br><br><br>
<link rel="stylesheet" href="home.css">
<Body background="2348994.jpg"> <br>
<div class="wrapper">
<nav class="navbar">
<img class="logo" align="left" src="download.jpg">	
<ul><li><a class=active href="login.php">Logout</a></li></ul></nav>
<center><h1 style="font-size:4vw;">Slot Booking</h1></center></head><body><center><form method="POST">
<lable for><font size=6>Hospital Address:</lable>
<select name="temple">
<option selected>Select
<option>Nashik municipal corporation hospital cidco,sambhaji stadium Rd,Drdo Colony,Sinhasta Nagar,Nashik maharashtra 422010.
<option>Nashik municipal corporation hospital,mahatma phule Chowk, old cidco,cidco,lekhanagar,Nashik maharashtra 422009.
<option>manch rashtramata hospital,Maina road,near old MNC,Shalimar,Nashik,Maharashtra 422001.
<option>Government Hospital,kalika Nagar, Amrutdham,Nashik maharashtra 422207.
<option>Bitco Hospital,Near mukhti dham,Bytco hospital,Rajwada nagar,Deolali Gaon,Nashik maharashtra 422214.
<option>ESIS Hospital,Trambkeshwar Rd,Opposite Esis Hospital,MIDC,Satpur Colony,Nashik maharashtra 422007.
<option>Namko Hospital,Namko Hospital,peth rd,opp RTO office,Nashik maharashtra 422013.
<option>NIMS  Hospital,Gangapur road,Thatte nagar,Nashik maharashtra 422005.
<option>Nashik  Hospital,kaut ghat rd, mumbai naka,bhagwat nagar,Dr.Homi Bhabha nagar,Nashik maharashtra 422001.
<option>District Government Hospital nashik,Trambkeshwar RD, police staff colony,Nashik maharashtra 422002.
</select><br><br>
<lable for>Date:</lable>
<input type=date name="visitdate"><br><br>
<lable for>Time:</lable>
<input type=time name="visittime">
<br><br>
<input type=submit name="book" value="Book">&nbsp;&nbsp;&nbsp;
<input type=reset name="reset" value="Clear">
</form></body>
</html>