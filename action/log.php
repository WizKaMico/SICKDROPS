<?php
  session_start();
   include('../connection/connection.php');
	if (isset($_POST['login']))
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, md5($_POST['password']));
 
			$query 		= mysqli_query($conn, "SELECT * FROM user WHERE  password='$password' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{		

				   if($row['status'] == 'ACTIVE'){	
					$_SESSION['user_id']=$row['user_id'];
					header('location: ../USER/index.php');
				   }else{
				   header('location: ../index.php?view=CONFIRMATION&code='.$row['code']);		
				   }
 
				}
			else
				{
					header('location: ../index.php?view=LOGIN');
				}
		}
  ?>