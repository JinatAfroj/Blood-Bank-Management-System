<?php
	session_start();
	require_once('dbconfig/config.php');
    include 'work.php';

	//phpinfo();
    if(!get_session()) 
    { 
        header("location:userlogin.php"); 
    }

    if(isset($_GET['q'])) 
    { 
        user_logout();
        header("location:../index.php"); 
    } 


    $id=$_SESSION['id'];
    $sql= "SELECT * FROM info where id='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $username  =$row['username'];
    $password  =$row['password'];
    $email     =$row['email'];
    $fullname  =$row['fullname'];
    $address   =$row['Address'];
    $bloodgrp  =$row['bloodgrp'];
    $phone     =$row['phone'];
    $dob       =$row['dob'];
    $gender    =$row['gender'];


?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<style>
    .wells{
        width: 500px;
        margin-left: auto;
        margin-right: auto;
    }
</style>
</head>
<body>
	<div class="container">
	<div class="wells">
		<h2>User Profile</h2><hr>			
			<a href="userpage.php?q=logout" style="float:right"><button type="button" class="btn btn-danger">Logout</button></a>
			<br>
			<table class="table table-striped">
                <tr>
			        <td>User ID: </td>
			        <td><?php echo $id; ?> </td>
			    </tr>
			    <tr>
			        <td>User Name: </td>
			        <td><?php echo $username; ?> </td>
			    </tr>
			    <tr>
			        <td>Full Name: </td>
			        <td><?php echo $fullname; ?> </td>
			    </tr>
			    <tr>
			        <td>Address: </td>
			        <td><?php echo $address; ?> </td>
			    </tr>
			    <tr>
			        <td>Phone Number: </td>
			        <td><?php echo $phone; ?> </td>
			    </tr>
			    <tr>
			        <td>Email: </td>
			        <td><?php echo $email; ?> </td>
			    </tr>
			    <tr>
			        <td>Blood Group: </td>
			        <td><?php echo $bloodgrp; ?> </td>
			    </tr>
			    <tr>
			        <td>Date of Birth: </td>
			        <td><?php echo $dob; ?> </td>
			    </tr>
			    <tr>
			        <td>Gender: </td>
			        <td><?php echo $gender; ?> </td>
			    </tr>
			    <tr>
			        <td>Password: </td>
			        <td><?php echo $password; ?> </td>
			    </tr>
			</table>	
           
             <div style="float:right">
                 <a href="update.php">Edit Profile</a> &nbsp;|&nbsp;
                 <a href="chpassword.php">Change Password</a>
                 
             <div/>		

    </div>
	</div>
</body>
</html>