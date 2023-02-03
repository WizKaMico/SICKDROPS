<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$code = $_POST['code'];
		$category = $_POST['category'];
		$size = $_POST['size'];
		$price = $_POST['price'];

		$sql = "UPDATE tbl_product SET name = '$name', code = '$code', category = '$category', price = '$price', size = '$size' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating';
		}
	}
	else{
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location: index.php');

?>