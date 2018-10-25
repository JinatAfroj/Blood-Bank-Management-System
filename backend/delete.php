<?php

session_start();
	require_once('dbconfig/config.php');
    include 'work.php';

    if(!get_session()) 
    { 
        header("location:adminlogin.php"); 
    } 
    else if(isset($_GET['del_id']))
    {

			$delete_id=$_GET['del_id'];
			$sql="DELETE FROM info WHERE id='$delete_id' ";

			$result = mysqli_query($con, $sql);
			if ($result > 0)
			{
				
				echo "<script>alert('Data has been deleted.')</script>";
				 header('Location:adminpage.php');
			}
            else
            {
                echo "<script>alert('Due to some error could not delete')</script>";
            }
    }



?>