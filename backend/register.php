<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();

?>
<!DOCTYPE html>
<html>
<head>
    
<title>Sign Up Page</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css" type="text/css">



</head>
<body>
	<div class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	     <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
                              
      </button>
      <a class="navbar-brand" >&nbsp &nbspBlood Bank Management System&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
                 <li><a href="../index.php">Home</a></li>
        
        
		        <li><a href="../info.php#motv">Our Motive</a></li>
		        <li><a href="../info.php#guide">Donors Guidline</a></li>
				<li><a href="register.php">Donate Blood</a></li>
		        <li><a href="../info.php#conn">Contact Us</a></li>
		        <li><a href="adminlogin.php">Admin Panel</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        <li ><a href="userlogin.php">Sign In</a></li>
      </ul>
    </div>
  </div>
</nav>
	<div class="jumbotron reg">
	<h2>Register Here</h2><hr>
		<form action="register.php" method="post" autocomplete="on" name="myForm" onsubmit="return validate();">
			  
			<div class="form-group">
			    <label><b>Full Name:</b></label><br>
				<input type="text" class="form-control" placeholder="Enter Full Name" name="fullname"><br>
				<label><b>Username:</b></label><br>
				<input type="text" class="form-control" placeholder="Enter Username" name="username"><br>
                <label><b>Email:</b></label><br>
				<input type="email" class="form-control" placeholder="Enter Email" name="email"><br>				
				<label><b>Address:</b></label><br>
				<textarea name="address" rows="5" cols="45"></textarea>
				<br>
				<label><b>Phone Number:</b></label><br>
				<input type="text" class="form-control" placeholder="017XXXXXXXX" name="phone"><br>
				
                <label>Blood Group : </label>
				<select name="bloodgrp">
                    <option  value=""></option>
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
                </select>				
				<br><br>
				<label>Gender : </label>
				&nbsp;<input type="radio" name="gender" value="male">&nbsp;Male
				&nbsp;<input type="radio" name="gender" value="female">&nbsp;Female
				<br><br>
				
				<label>Date Of Birth: </label>
				<input type="date" name="dob">
				<br><br>
				
				<label><b>Password:</b></label><br>
				<input type="password" class="form-control" placeholder="Enter Password" name="password"><br>
				<label><b>Confirm Password:</b></label><br>
				<input type="password" class="form-control" placeholder="Enter Confirm Password" name="cpassword"><br>
                
            </div>    
				

             <center> 
				<input name="register" class="btn btn-primary" type="submit" value="Register">		
				<a href="../index.php"><button type="button" class="btn btn-default">Back</button></a>
		    </center>  
		</form>
    </div>
    </div>	
	
 <script src="js/valid.js"></script>	

</body>
</html>






<?php

if(isset($_POST['register']))
{
    $username  =$_POST['username'];
    $password  =$_POST['password'];
    $cpassword =$_POST['cpassword'];
    $email     =$_POST['email'];
    $fullname  =$_POST['fullname'];
    $address   =$_POST['address'];
    $bloodgrp  =$_POST['bloodgrp'];
    $phone     =$_POST['phone'];
    $dob       =$_POST['dob'];
    $gender    =$_POST['gender'];

    
    
            $query = "select * from info where username='$username'";
					//echo $query;
            $query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
                    if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into info(username, password, email, fullname, Address, bloodgrp, phone, dob, gender) values('$username','$password','$email', '$fullname', '$address', '$bloodgrp', '$phone', '$dob', '$gender')";
                            
							$query_run = mysqli_query($con,$query) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
							if($query_run)
							{
                                echo "<script>alert('Registration Successfull. Please Login'); window.location = 'userlogin.php';</script>";
                                
                            
                            
							}
							else
							{
                                
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later </p><br>'.$query_run;
							}
                         
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				
}
			
		?>