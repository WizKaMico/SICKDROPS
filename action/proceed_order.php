<!-- breadcrumb -->



	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="index.php?view=HOME" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				Shoping Cart
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</span>

			<span class="stext-109 cl4">
				Order Processed
			</span>
		</div>
	</div>
		

	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" name="frm_customer_detail" action="index.php?view=PROCESSORDER" method="POST">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>
								<?php foreach ($cartItem as $item) { ?>
								<tr class="table_row">
									<td class="column-1">
					   <a href="index.php?view=HOME&action=remove&id=<?php echo $item["cart_id"]; ?>">
						<div class="header-cart-item-img">
							<img src="ADMIN/PRODUCTS/<?php echo $item["image"]; ?>" alt="IMG">
						</div>
						 </a>
									</td>
									<td class="column-2"> <?php echo $item["name"]; ?> | <?php echo $item["size"]; ?></td>
									<td class="column-3"> <?php echo "₱".$item["price"]; ?></td>
									<td class="column-4">
									<?php echo $item["quantity"]; ?>	
									</td>
									<td class="column-5">
									<?php $total = $item["price"] * $item["quantity"]; ?>	
									<?php echo '₱'; echo ' '; echo $total; ?>
									</td>
								</tr>
							    <?php } ?>

								
							</table>
						</div>
					</div>
				</div>

				
			</div>
		</div>
	</form>