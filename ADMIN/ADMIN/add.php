<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['add'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "INSERT INTO admin (email, password) VALUES ('$email', '$password')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>