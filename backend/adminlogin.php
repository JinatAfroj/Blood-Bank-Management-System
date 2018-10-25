<?php
	session_start();
	require_once('dbconfig/config.php');
    include 'work.php';
	//phpinfo();
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body style="background-image: url('home_bg.jpg')">
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
	<div class="jumbotron login">
	<h2>Admin Login</h2>
	<hr>
		<form action="" method="post">
		
			<div class="form-group">
				<label><b>Username:</b></label><br>
				<input type="text" class="form-control" placeholder="john" name="username" required size="70">
            </div>
            <div class="form-group">
				<label><b>Password:</b></label><br>
				<input type="password" class="form-control" placeholder="abc123" name="password" required size="70">
            </div>

            <button class="btn btn-lg btn-success btn-block" name="login" type="submit">Login</button>
            <div id="new_user">
                <a href="../index.php">Back</a>
            </div>
			
		</form>
	</div>	
	</div>
</body>
</html>