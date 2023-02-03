<?php session_start(); ?>
<?php include('../connection/connection.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color:grey;">
<div class="form-wrapper">
  
  <form action="#" method="post">
    <img src="../logo/logo.png" style="width:100%;">
	
    <div class="form-item">
		<input type="text" name="email" required="required" placeholder="Email" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="password" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login" style="background-color:black;"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, $_POST['password']);
			
			$query 		= mysqli_query($conn, "SELECT * FROM admin WHERE password='$password' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:index.php?view=DASHBOARD');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
  <div class="reminder">
  
  </div>
  
</div>

</body>
</html>