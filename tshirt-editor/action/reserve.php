<?php
	session_start();
	include_once('../../connection/connection.php');
 
	if(isset($_POST['add'])){
		$quantity = $_POST['quantity'];
		$email = $_POST['email'];
		$user_id = $_POST['user_id'];
		$shirt_style = $_POST['shirt_style'];
		$shirt_size = $_POST['shirt_size'];
		date_default_timezone_set('Asia/Manila');
		$date_created = date('Y-m-d');
		$oid =  'ZOCLOCK-'.rand(6666,9999);
		$status = 'UPLOADING DESIGN';
		$photo = '';

		$xresult=mysqli_query($conn, "select * from customize_size where size_id='$shirt_size'");
		$xrow=mysqli_fetch_array($xresult);


		$yresult=mysqli_query($conn, "select * from customize_style where style_id='$shirt_style'");
		$yrow=mysqli_fetch_array($yresult);

		$estimated = ($xrow['price'] + $yrow['price']) * $quantity;
        $finale = '0';
		

		$sql = "INSERT INTO costomize_shirt_order (oid, quantity, email, user_id, shirt_style, shirt_size, estimated_amount, final_amount, status, photo, date_created) VALUES ('$oid', '$quantity', '$email', '$user_id', '$shirt_style', '$shirt_size', '$estimated', '$finale', '$status', '$photo', '$date_created')";
 
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'added successfully';
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
 
	header('location: ../tshirt-editor.php?email='.$email.'&code='.$oid);
?>