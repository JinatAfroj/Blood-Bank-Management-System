<?php
	session_start();
	require_once('dbconfig/config.php');
    include 'work.php';
     
	//phpinfo();

     if(!get_session()) 
    { 
        header("location:adminlogin.php"); 
    } 




?>

<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div class="container">
	<div class="jumbotron reg">
	<h2>Change Password</h2>
	<hr>

		<form action="chpassword.php" method="post" autocomplete="on">
			           
			
			<div class="form-group">
				<label><b>Current Password</b></label><br>
				<input type="password" class="form-control" placeholder="old password" name="oldpass" required size="70" autocomplete="on"><br>
                <label><b>New Password</b></label><br>
				<input type="password" class="form-control" placeholder="new password" name="newpass" required size="70" autocomplete="on"><br>
				<label><b> Retype New Password</b></label><br>
				<input type="password" class="form-control" placeholder="Enter Confirm Password" name="cnewpass" required size="70"><br>
				
                
				<button name="change" class="btn btn-primary" type="submit">Change</button>
				
				<a href="userpage.php"><button type="button" class="btn btn-default">Back</button></a>
            </div>
		</form>
	</div>	
	</div>
</body>
</html>
		
		<?php
			if(isset($_POST['change']))
			{
				$opassword=$_POST['oldpass'];
				$password=$_POST['newpass'];
				$cpassword=$_POST['cnewpass'];
                $id=$_SESSION['id'];
                
               
            
                if((strlen($password)) < 6)
                {
                    echo '<script type="text/javascript">alert("Your password must be atleast 6 characters long")</script>';
            
                } 
                else if($_SESSION['password']==$opassword && $password==$cpassword)
                {
                    $updated = mysqli_query($con, "UPDATE info SET password = '$password' WHERE id = '$id'") or die();
                    if($updated)     
                    {
                        echo "<script>alert('Password Changed Successfully');</script>";
                    }
                }
                else if($_SESSION['password']!=$opassword)
                {
                    echo '<script type="text/javascript">alert("Current Password not matched")</script>';
                }
                else if($password!=$cpassword)
                {
                    echo '<script type="text/javascript">alert("Re-type Password not mathced")</script>';
                }
            }
		
             ?>
