<?php

	require_once('backend/dbconfig/config.php');
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="backend/css/bootstrap.css">
   

	
   
   
</head>
    
<body style="background-image: url('images/bg.jpg')">
<div class="container-fluid">
<br>
<nav class="navbar navbar-inverse ">
  
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	     <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
                              
      </button>
      <a class="navbar-brand" >Blood Bank Management System</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" >
      <ul class="nav navbar-nav">
                 <li class="active"><a href="index.php">Home</a></li>      
		        <li><a href="info.php#motv">Our Motive</a></li>
		        <li><a href="info.php#guide">Donors Guidline</a></li>
				<li><a href="backend/register.php">Donate Blood</a></li>
		        <li><a href="info.php#conn">Contact Us</a></li>
		        <li><a href="backend/adminlogin.php">Admin Panel</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li ><a href="backend/userlogin.php">Sign In</a></li>
      </ul>
    </div> 
</nav>
<br>


  

 <div class="row" >  
  <div class="col-md-3"> <iframe src="eli.php" height="308" style="border:none;"></iframe></div>
    <div class="col-md-6">
	<!-- Slide Show -->
          <img class="mySlides" src="images/test.jpg" style="width:100%; height:308px ">
          <img class="mySlides" src="images/test1.jpg" style="width:100%; height:308px">
          <img class="mySlides" src="images/test2.jpg" style="width:100%; height:308px">
           <img class="mySlides" src="images/test3.jpg" style="width:100%; height:308px">
           <img class="mySlides" src="images/test4.jpg" style="width:100%; height:308px">

    </div>

  
  <div class="col-md-3"> <iframe src="neli.php" height="308"  style="border:none;"></iframe></div>
</div>
  <br><br>
  <div style=" margin: 0;
    background-color: rgba(176, 75, 80, 0.2);
    text-align: center; padding: 5px 0px;">
    <form action=""  method="post">
    <label>Select Blood Group:</label>
	<select class="" name="bloodgrp" id="" style="height:25px ; border-radius: 7px;">
					<option  value="A+">A+</option>
                    <option  value="A-">A-</option>
                    <option  value="B+">B+</option>
                    <option  value="B-">B-</option>
                    <option  value="O+">O+</option>
                    <option  value="O-">O-</option>
                    <option  value="AB+">AB+</option>
                    <option  value="AB-">AB-</option>
                    <option  value="A1+">A1+</option>
                    <option  value="A1-">A1-</option>
                    <option  value="A2+">A2+</option>
                    <option  value="A2-">A2-</option>
                    <option  value="A1B+">A1B+</option>
                    <option  value="A1B-">A1B-</option>
                    <option  value="A2B+">A2B+</option>
                    <option  value="A2B-">A2B-</option>
    </select> &nbsp<button type="submit" name="search" class="btn btn-primary" >Find Donor </button>&nbsp;
    <a href="index.php">Refresh</a>
    </form>
</div>
<br>

<?php
    
    if(isset($_POST['search']))
    {
        $bloodgrp=$_POST['bloodgrp'];
        $sql= "SELECT * FROM info where bloodgrp='$bloodgrp'";
        $result = mysqli_query($con, $sql);
               
        if(mysqli_num_rows($result) > 0)    
        {
         echo '<table class="table table-striped">';
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Blood Group</th>";
                echo "<th>Phone</th>";
                echo "<th>Email</th>";
                echo "<th>Gender</th>";
                echo "<th>Address</th>";
                echo "<th>Date of Birth</th>";
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            
                $email     =$row['email'];
                $fullname  =$row['fullname'];
                $address   =$row['Address'];
                $bloodgrp  =$row['bloodgrp'];
                $phone     =$row['phone'];
                $dob       =$row['dob'];
                $gender    =$row['gender'];    
        
                echo "<tr>";
                    echo "<td>" . $fullname . "</td>";
                    echo "<td>" . $bloodgrp. "</td>";
                    echo "<td>" . $phone . "</td>";
                    echo "<td>" . $email. "</td>";
                    echo "<td>" . $gender. "</td>";
                    echo "<td>" . $address. "</td>";
                    echo "<td>" . $dob. "</td>";

                echo "</tr>";
            }
            echo "</table>";
        }
        else
        {
            echo "<center><h3>No records found</h3></center>";
        }
        
    }
    
    
?>

<footer  style="text-align:center">
 <small>&copy; Copyright 2017, Jinat Afroj</small>
</footer>
  
<script>
// Automatic Slideshow - change image every 1.5 seconds
var myIndex=0;
slide();
function slide()
{
    var i;
    var x=document.getElementsByClassName("mySlides");
    for(i=0; i<x.length; i++)
        {
            x[i].style.display="none";
        }
    myIndex++;
    if(myIndex>x.length)
        {
            myIndex=1;
        }
    x[myIndex-1].style.display="block";
    setTimeout(slide,1500);
}
</script>
</div>
</body>
</html>
