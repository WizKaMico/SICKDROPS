<?php
	if (isset($_POST['add']))
		{
			include('../connection/connection.php');
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$sec_id = mysqli_real_escape_string($conn, $_POST['sec_id']);
            $answer = mysqli_real_escape_string($conn, $_POST['answer']);
			$password = mysqli_real_escape_string($conn, md5($_POST['password']));
 
			$query 		= mysqli_query($conn, "SELECT * FROM user WHERE email='$email' and sec_id='$sec_id' and answer = '$answer'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{			
					

					 $user_id = $row['user_id'];
			          mysqli_query($conn,"UPDATE user SET password = '$password' WHERE user_id = '$user_id'");  
					header('location:../index.php?view=FORGOT&message=SUCCESS');
 
				}
			else
				{
					header('location:../index.php?view=FORGOT&message=ERROR');
				}
		}
  ?>