<?php
			if(isset($_POST['login']))
			{
                $username=$_POST['username'];
				$password=$_POST['password'];
				$query = "select * from admin where admin_name='$username' and adminpass='$password' ";
				$query_run = mysqli_query($con,$query);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
					$_SESSION['a_username'] = $username;
					$_SESSION['a_password'] = $password;                    
					$_SESSION['admin_login']=true;
					header( "Location: adminpage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
            }
                
                //********************* USER ******************************************************
            else if(isset($_POST['user_login']))
            {
				$username=$_POST['username'];
				$password=$_POST['password'];
				$query = "select * from info where username='$username' and password='$password' ";
				//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
				{
					if(mysqli_num_rows($query_run)>0)
					{
					$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);
					
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['password']=$password;
					$_SESSION['admin_login']=true;
					header( "Location: userpage.php");
					}
					else
					{
						echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Database Error")</script>';
				}
            }

			
            function get_session()
            {
                return $_SESSION['admin_login'];
            }
            function user_logout()
            {
                $_SESSION['admin_login']=false;
                session_destroy();
            }
			

		?>