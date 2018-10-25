<?php
session_start();
	require_once('dbconfig/config.php');
    include 'work.php';

    if(!get_session()) 
    { 
        header("location:adminlogin.php"); 
    }

    $id=$_GET['id'];
    $_SESSION['id']=$id;
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
    
    $_SESSION['password']=$password;
    

?>
<!DOCTYPE html>
<html>
<head>
    
<title>Edit Profile</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="container">
	<div class="jumbotron reg">
	<h2>Edit Your Profile</h2><hr>
		<form action="" method="post" autocomplete="on" name="myForm" onsubmit="return validate();">
			  
			<div class="form-group">
			    <label><b>Full Name:</b></label><br>
				<input type="text" class="form-control" value="<?php echo $fullname; ?>" name="fullname"><br>
				<label><b>Username:</b></label><br>
				<input type="text" class="form-control" value="<?php echo $username; ?>" name="username"><br>
                <label><b>Email:</b></label><br>
				<input type="email" class="form-control" value="<?php echo $email; ?>" name="email"><br>				
				<label><b>Address:</b></label><br>
				<textarea name="address" rows="5" cols="45"><?php echo $address; ?></textarea>
				<br>
				<label><b>Phone Number:</b></label><br>
				<input type="text" class="form-control" value="<?php echo $phone; ?>" name="phone"><br>
				
                <label>Blood Group : </label>
				<select name="bloodgrp">
                    <option value="<?php echo $bloodgrp;?>"><?php echo $bloodgrp; ?></option>
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
				<input type="date" name="dob" value="<?php echo $dob; ?>">
				<br><br>
				
                
            </div>    
				
            <a href="chpassword.php">Change Password</a>
             <center> 
				<button name="update" class="btn btn-primary" type="submit">save</button>	
				<a href="adminpage.php"><button type="button" class="btn btn-default">Back</button></a>
		    </center>  
		</form>
    </div>
    </div>	
		<?php
			if(isset($_POST['update']))
			{
				$dbusername  =$_POST['username'];
                $dbemail     =$_POST['email'];
                $dbfullname  =$_POST['fullname'];
                $dbaddress   =$_POST['address'];
                $dbbloodgrp  =$_POST['bloodgrp'];
                $dbphone     =$_POST['phone'];
                $dbdob       =$_POST['dob'];
                $dbgender    =$_POST['gender'];
            
                if(strlen($_POST['username']) < 3)
                {
                    echo '<script type="text/javascript">alert("Your username must be atleast 3 characters long")</script>';
            
                } 
                else
                {
                    $sql="UPDATE info SET username = '$dbusername', fullname= '$dbfullname', email='$dbemail', Address='$dbaddress', bloodgrp='$dbbloodgrp', phone='$dbphone', dob='$dbdob', gender='$dbgender'  WHERE id = '$id'";
                    
                    $updated = mysqli_query($con, $sql) or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);
                    if($updated)     
                    {
                        echo '<script type="text/javascript">alert("Update Successful")</script>';
                        header('Location:a_update.php?id='.$id);
                    }
                    else
                    {

                        echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later </p><br>'.$query_run;
                    }
                }
            }
			
		?>
		
<script src="js/valid.js"></script>

</body>
</html>