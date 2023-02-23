<?php
error_reporting(0);
session_start();
include "dbconnection1.php";
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
table td,table th{
  border-collapse:collapse ;
  padding: 10px;
  border: 1px solid #fff;
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
<h3><font color="black">Admin Home</font></h3>
<br>
  <div>
      <ul>
         <li><a href="ahome.php">Booking</a></li>
         
         <li><a href="logout.php">Logout</a></li>
      </ul>
  </div>
 <h2>Bookings</h2>
 <?php
    $sql="select * from registration,vaccination where vaccination.uemail=registration.email";
    $result=mysqli_query($con,$sql);
 ?>
 <table>
   <tr>
      <th>Sr. No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Vaccine</th>
      <th>Dose</th>
      <th>Date</th>
      <th>Slot</th>
   </tr>
   <?php 
       $cnt=1;
       while($row=mysqli_fetch_row($result)) {
    ?>
       <tr>
         <td><?php echo $cnt;?></td>
         <td><?php echo $row[1];?></td>
         <td><?php echo $row[8];?></td>
         <td><?php echo $row[5];?></td>
         <td><?php echo $row[4];?></td>
         <td><?php echo $row[14];?></td>
         <td><?php echo $row[16];?></td>
         <td><?php echo $row[18];?></td>
         <td><?php echo $row[17];?></td>
       </tr>
    <?php
   }
   ?>
 </table>
  
</center>
</h4>
</div>


</body>
</html>