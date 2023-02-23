<?php include("dbconnection.php");?>

<?php
error_reporting(0);
if(isset($_POST["add"]))
{
$sname=$_POST['fname'];
$spass=$_POST['password'];
$semail=$_POST['email'];
$p=mysqli_query($con,"insert into user(sname,email,password) values('$sname','$semail','$spass');");
header('location:login.php');
if($p>0)
{
echo "SuccessFully Inserted record";
}
else
{
echo"can not insert record";
}
}
?>



<html>
<head>
<title>SIGN IN</title><br><br><br><link rel="stylesheet" href="home.css">
<div class="wrapper">
      <nav class="navbar">
      <img class="logo" align="left" src="download.jpg">  
                
        <ul>
          
          <li><a class=active href="login.php">Login</a></li>
         
          
        </ul>
      </nav>
<Body background="2348994.jpg"> <br> 
<head>
<style>
body {
  background-color: coral;
}
</style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/login1.css">
</head>
<body>
<div class="box">
<h4>
<center>
<div class="login">
<br><br><br><br><br><br>
</div>
<h3><font color="black">Please Provide The Following Details</font></h3>
<br>
<form name="myform" method="post" action="register.php" >  
<center>

User Name<br>
<input type="text" name="fname" placeholder="Enter The User Name"><br>

Email id<br>

<input type="email" id="myEmail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email ID">
<br>

Create password<br>
<input type="text" name="password" placeholder="Enter Password"><br>
<br>

<input type="submit" name="add" value="create"><br><br>


</form>
</center>
</h4>
</div>
</body>
</html>