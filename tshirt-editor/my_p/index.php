
<?php
	session_start();
		$user_id = $_GET['user_id'];	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation using PHP/MySQLi with DataTable and PDF Generator using TCPDF</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	
	<div class="row">
		<div class="col-sm-12 ">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>OID</th>
						<th>DESIGN</th>
						<th>PCOST</th>
						<th>QUANTITY</th>
						<th>SIZE</th>
						<th>STYLE</th>
						<th>FCOST</th>
					    <th>ACTION</th>
						<th>STATUS</th>
					</thead>
					<tbody>
						<?php
							include_once('../../db.php');
							$sql = "SELECT * FROM costomize_shirt_order LEFT JOIN customize_size ON costomize_shirt_order.shirt_size = customize_size.size_id LEFT JOIN customize_style ON costomize_shirt_order.shirt_style = customize_style.style_id  WHERE user_id = '$user_id'";
 
							//use for MySQLi-OOP
							$query = $con->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['oid']."</td>
								    <td><img src='../action/".$row['photo']."' style='width:30%; height:100px;'></td>
								    <td> ₱ ".$row['estimated_amount']."</td>
								     <td>".$row['quantity']."</td>
								     <td>".$row['size_name']."</td>
								     <td>".$row['style_name']."</td>"; 
								     if($row['final_amount'] != '0'){ echo "<td> ₱ ".$row['final_amount']."</td>"; }else{ echo "<td>FOR REVIEW</td>"; }
								      if($row['status'] == 'FINAL PRICE ADDED'){ echo "<td><a href='#edit_".$row['cid']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> PAY NOW</a></td>"; } else if($row['status'] == 'PAYMENT CONFIRMATION'){ echo "<td><a href='#pay_".$row['cid']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> CONFIRM PAYMENT</a></td>";  }  else if($row['status'] == 'PAYMENT CONFIRMED'){ echo "<td>PAYMENT CONFIRMED</a></td>"; } else{ echo "<td>FOR REVIEW</td>"; }
								   echo "<td>".$row['status']."</td>
								</tr>";

								include('edit_delete_modal.php');
							}
							/////////////////
 
							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////
 
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

 
<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();
 
    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});




</script>
</body>
</html>