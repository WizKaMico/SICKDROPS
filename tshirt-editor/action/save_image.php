<?php
	require_once '../../connection/connection.php';
	if(ISSET($_POST['save'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$email = $_POST['email'];
        $code = $_POST['code'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "UPDATE costomize_shirt_order SET status = 'IMAGE UPLOADED', photo = '$path' WHERE oid = '$code'") or die(mysqli_error());
				echo "<script>alert('User account saved!')</script>";
				header("location: ../finale.php?email=".$email."&code=".$code);
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>