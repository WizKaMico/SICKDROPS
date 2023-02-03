<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php?view=HOME" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Customize
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" name="frm_customer_detail" action="#" method="POST">
		<div class="container">
			<div class="row">
			
			
				
					
					
				
				

				<div class="col-sm-12 col-lg-12 col-xl-12 m-lr-auto m-b-50">
				
						

						
                          <iframe src="../tshirt-editor/?email=<?php echo $row['email']; ?>&user_id=<?php echo $row['user_id']; ?>" style="width:100%; height:600px;"></iframe>
						

				
						
					
				</div>
			</div>
		</div>
	</form>