<!-- Start Banner Area -->
<h1 class="banner">All products</h1>

<!-- End Banner Area -->
<div class="container">
	<div class="row">
		<?php include 'sidebar.php' ?>
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="sorting">
					<select>
						<option value="1">Default sorting</option>
						<option value="1">Default sorting</option>
						<option value="1">Default sorting</option>
					</select>
				</div>
				<div class="sorting mr-auto">
					<select>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
					</select>
				</div>
				<div class="pagination">
					<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
					<a href="#">6</a>
					<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- End Filter Bar -->

			<!-- Start Best Seller -->
			<section class="products-filtered">
					<!-- single product -->
					<?php foreach ($tab_products as $products): ?>
						
							<div class="single-product">
								<img class="img-fluid" src="assets/img/sartoriale/<?php echo $products['img'] . '.jpg'; ?>"
									style="width:255px;  height:271px">
								<div class="product-details">
									<h6><?php echo $products['product_name'] ?></h6>
									<div class="price">
										<h6 style="font-size:16px;">$<?php echo $products['price']; ?></h6>

									</div>
									<div class="prd-bottom">

										<a href="index.php?url=cart=<?php echo $products['id_product']; ?>"
											class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>

										<a href="/productDetail/<?php echo $products['id_product']; ?>"
											class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>

									</div>
								</div>
							</div>
						
					<?php endforeach; ?>
			</section>
			<!-- End Best Seller -->


			<!-- Pagination -->
			 <!--
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="sorting mr-auto">
					<select>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
					</select>
				</div>
				<div class="pagination">
					<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
					<a href="#">6</a>
					<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>-->
			<!-- Pagination -->
		</div>
	</div>
</div>