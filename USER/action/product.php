<!-- Slider -->
	<section class="section-slide">
		<iframe src="carousel/" style="width:100%; height:800px;"></iframe>
	</section>


	

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-130">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>
				

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".shirt">
						Shirt
					</button>

					

				

					
				</div>
			</div>

			<div class="row isotope-grid">

				 <?php
			    $query = "SELECT * FROM tbl_product";
			    $product_array = $shoppingCart->getAllProduct($query);
			    if (! empty($product_array)) {
			        foreach ($product_array as $key => $value) {
			     ?>

				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item shirt">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0 label-new" style="background-color:#e9301c;" data-label="New">
							<img src="../ADMIN/PRODUCTS/<?php echo $product_array[$key]["image"]; ?>" alt="IMG-PRODUCT">

							<form method="post" action="index.php?view=HOME&action=add&code=<?php echo $product_array[$key]["code"]; ?>">
							 <input type="hidden" name="quantity" value="1" size="2" class="input-cart-quantity" />	
						
							<button class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">ADD TO CART</button>
						</form>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="index.php?view=<?php echo 'SPECIFIC'; ?>&code=<?php echo $product_array[$key]["code"]; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								 <?php echo $product_array[$key]["name"]; ?> | <?php echo $product_array[$key]["size"]; ?>
								</a>

								<span class="stext-105 cl3">
								<?php echo "₱".$product_array[$key]["price"]; ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
								
							</div>
						</div>
					</div>
				</div>

				<?php } } ?>


	

			</div>

		
		</div>
	</section>