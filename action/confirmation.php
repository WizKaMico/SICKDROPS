<!-- breadcrumb -->
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.html" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Confirmation
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" method="POST" action="action/verify.php">
		<div class="container">
			<div class="row">
						<div class="col-sm-12 col-lg-12 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Verify Identity
						</h4>

						

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
							
								
								<div class="p-t-15">
									
									<div class="bor8 bg0 m-b-22">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="number" name="code" placeholder="Enter Code Send To Email" style="width:100%;" required="">
									</div>

								
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="hidden" name="rcode" value="<?php echo $_GET['code']; ?>" style="width:100%;" readonly="">
							

								

									


									
									
								
										
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
						
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" name="add">
							CONFIRM
						</button>

					
					</div>
				</div>

			
			</div>
		</div>
	</form>

	