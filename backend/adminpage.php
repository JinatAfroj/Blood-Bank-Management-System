<?php
	session_start();
	require_once('dbconfig/config.php');
    include 'work.php';

	//phpinfo();
    if(!get_session()) 
    { 
        header("location:adminlogin.php"); 
    } 
    if(isset($_GET['q'])) 
    { 
        user_logout();
        header("location:../index.php"); 
    } 
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<!--<link rel="stylesheet" href="css/style.css">-->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="container">
		<center><h2>Admin Panel</h2></center>
		<hr>
        <center><h4><bold>Admin: <?php echo $_SESSION['a_username'];?></bold></h4></center>
        <center><h4><bold>Password: <?php echo $_SESSION['a_password'];?></bold></h4></center>
        <center><a href="a_change.php">Change Password</a></center>
        <a href="adminpage.php?q=logout"><button type="button" class="btn btn-danger" style="float:right;">Logout</button></a>
        <br><br>             		
		
			            
                <?php 
                $sql = "SELECT * FROM info";
if($result = mysqli_query($con, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo '<table class="table table-striped">';
            echo "<tr>";
                echo "<th>username</th>";
                echo "<th>Full Name</th>";
                echo "<th>Blood Group</th>";
                echo "<th>Phone</th>";
                echo "<th>password</th>";
                echo "<th>email</th>";
                echo "<th>Delete</th>";
                echo "<th>Edit</th>";

                
                
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td>" . $row['bloodgrp'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td><a href='delete.php?del_id=". $row['id'] ."'>Delete</a></td>";
                echo "<td><a href='a_update.php?id=". $row['id'] ."'>Edit</a></td>";
       
           echo "</tr>";
        }
        echo "</table>";
        // Free result set. mysqli_free_result() function frees the memory associated with the result.
        mysqli_free_result($result);
    }
    else    
    {
        echo "No records. No User registered yet.";
    }
}
else    
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
?>
                
	</div>
</body>
</html>