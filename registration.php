<?php
error_reporting(0);
session_start();
include "dbconnection1.php";
$message='';

if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$bloodgroup=$_POST['bloodgroup'];
$document=$_POST['document'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="insert into registration values('','$fname','$lname','$dob','$gender','$age','$bloodgroup','$document','$email','$password','','')";
$result=mysqli_query($con,$sql);
header('location:vaccination.php');
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
<title>Registration Form</title><br><br><br>
<link rel="stylesheet" href="home.css">
<Body background="2348994.jpg"> <br>
<div class="wrapper">
<nav class="navbar">
<img class="logo" align="left" src="download.jpg">	
<ul><li><a class=active href="login.php">Logout</a></li></ul></nav>
<h1 style="font-size:4vw;">Registration Form</h1>
<?php echo $message;?>
<div class="loginbox">
<form action="registration.php" method="post">  
<center>

	       <label><font size=5>Enter First Name:</label>
		<input type="text" name="fname"  placeholder="First name"><br><br>
			
              <label>Enter Last Name:</label>
		<input type="text" name="lname"  placeholder="Last name"><br><br>
            
              <label>Enter Date Of Birth:</label>
              <input type="date" name="dob" placeholder="DOB"><br><br>
			
	       <label>Gender:</label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female<br><br>
            
              <label>Enter Your Age:</label>
              <input type="text" name="age" placeholder="age"><br><br>  
            
              <label>Enter Your BloodGroup:</label>
              <input type="text" name="bloodgroup" placeholder="bloodgroup"><br><br> 
            
              <label>Upload Document(Aadhaar Card):</label>
              <input type="file" name="document"><br><br>

		<label>Enter Email:</label>
		<input type="email" id="myEmail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email ID"><br><br>

		<label>Enter Your Password:</label>
		<input type="password" name="password" placeholder="Password"><br><br>
			
	       <input type="submit" name="submit" value="Next">&nbsp&nbsp&nbsp 
	       <input type="reset" name="reset" value="cancel">
</div>       
</form>
</center>
</body>
</html>