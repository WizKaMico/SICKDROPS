	<?php $code = $_GET['code']; ?>

<?php   

  $coderes=mysqli_query($conn, "select * from tbl_product where code='$code'")or die('Error In Session');
$crow=mysqli_fetch_array($coderes);

?>

	<!-- Product Detail -->


	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="../ADMIN/PRODUCTS/<?php echo $crow['image']; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="../ADMIN/PRODUCTS/<?php echo $crow['image']; ?>" alt="IMG-PRODUCT">

										
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

						
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $crow['name']; ?>
						</h4>

						<span class="mtext-106 cl2">
							₱ <?php echo $crow['price']; ?> 
						</span>

					
						
						<!--  -->
						<div class="p-t-33">
							
             <form method="post" action="index.php?view=SPECIFIC&action=add&code=<?php echo $code; ?>">
							<div class="flex-w flex-r-m p-b-10" style="margin-left:-100px;">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="quantity" value="1">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>	
						</form>
						</div>

		
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
				

						<li class="nav-item p-b-10">
							<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
					

						<!-- - -->
						<div class="tab-pane show active fade" id="reviews" role="tabpanel">
							<div class="row">
								<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
									<div class="p-b-30 m-lr-15-sm">
										<!-- Review -->
										<div class="flex-w flex-t p-b-68">
											
											<?php
										include_once('../connection/connection.php');
										$sqls = "SELECT * FROM rating WHERE code = '$code'";
											$queryep = $conn->query($sqls);
							      while($xrow = $queryep->fetch_assoc()){

										?>

											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
													<?php echo strtoupper($xrow['name']); ?>
													</span>

													<span class="fs-18 cl11">
														<?php if($xrow['rating'] == 1){ ?>
														<i class="zmdi zmdi-star"></i>
													  <?php } else if($xrow['rating'] == 2){ ?>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
													  <?php } else if($xrow['rating'] == 3){ ?>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
											      <?php } else if($xrow['rating'] == 4){ ?>
											      <i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>	
													  <?php } else { ?>
													  <i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>
														<i class="zmdi zmdi-star"></i>		
														<i class="zmdi zmdi-star"></i>	
													  <?php } ?>	
													</span>
												</div>

												<p class="stext-102 cl6">
												<?php echo $xrow['review']; ?>
												</p>
											</div>

										<?php } ?>


										</div>
										
										<!-- Add review -->
										<form class="w-full" action="#" method="POST">
											<h5 class="mtext-108 cl2 p-b-7">
												Add a review
											</h5>

											<p class="stext-102 cl6">
												Your email address will not be published. Required fields are marked *
											</p>

											<div class="flex-w flex-m p-t-50 p-b-23">
												<span class="stext-102 cl3 m-r-16">
													Your Rating
												</span>

												<span class="wrap-rating fs-18 cl11 pointer">
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<i class="item-rating pointer zmdi zmdi-star-outline"></i>
													<input class="dis-none" type="number" name="rating" required="">
												</span>
											</div>

											<div class="row p-b-25">
												<div class="col-12 p-b-5">
													<label class="stext-102 cl3" for="review">Your review</label>
													<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review" required=""></textarea>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="name">Name</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name" type="text" name="name" value="<?php echo $row['fullname']; ?>" readonly>
												</div>

												<div class="col-sm-6 p-b-5">
													<label class="stext-102 cl3" for="email">Email</label>
													<input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email" value="<?php echo $row['email']; ?>" type="text" name="email" readonly>
													<input type="hidden" name="code" value="<?php echo $code; ?>">
												</div>
											</div>

											<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" name="submit" style="width:100%;">
												Submit
											</button>
										</form>

										<?php 

                   if(isset($_POST['submit'])){
 
                   	include('../connection/connection.php');
									$rating = $_POST['rating'];
									$review = $_POST['review'];
									$name = $_POST['name'];
									$email = $_POST['email'];
									$code = $_POST['code'];


									 mysqli_query($conn,"INSERT INTO rating (rating, review, name, email, code) VALUES ('$rating', '$review', '$name', '$email', '$code')");  


                   }

										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: JAK-01
			</span>

			<span class="stext-107 cl6 p-lr-25">
				Categories: Jacket, Men
			</span>
		</div>
	</section>