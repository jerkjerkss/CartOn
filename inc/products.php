	<?php global $FETCHINFO; ?>
<!-- banner -->
	<div class="banner1" id="home1">
		<div class="container">
			<h2>trendy fashion dresses<span>up to</span> 30% <i>Discount</i></h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Products</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- dresses -->
	<div class="dresses">
		<div class="container">
			<div class="w3ls_dresses_grids">
				<div class="col-md-4 w3ls_dresses_grid_left">
					<div class="w3ls_dresses_grid_left_grid">
						<h3>Categories</h3>
						<div class="w3ls_dresses_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  


								<!-- CATEGORY HERE -->

								<?php 
									$categoryArray = $FETCHINFO::getCategoryArray();
									foreach ($categoryArray as $key => $value) {
									?>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="heading-<?php echo $key; ?>">
										  <h4 class="panel-title asd">
											<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $key; ?>" aria-expanded="false" aria-controls="collapseT-<?php echo $key; ?>">
											  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i><?php echo $value["CategoryName"]; ?>
											</a>
										  </h4>
										</div>
										<div id="collapse-<?php echo $key; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $key; ?>">
										   <div class="panel-body panel_text">
											<ul>
												<li><a href="#">Product 1</a></li>
												<li><a href="#">Product 2</a></li>
												<li><a href="#">Product 3</a></li>
												<li><a href="#">Product 4</a></li>
											</ul>
										  </div>
										</div>
									  </div>
									<?php
									}
								 ?>

								<!-- CATEGORY ENDS HERE -->

							  
							</div>
						</div>
					</div>
					<!-- <div class="w3ls_dresses_grid_left_grid">
						<div class="dresses_img_hover">
							<img src="images/47.jpg" alt=" " class="img-responsive" />
							<div class="dresses_img_hover_pos">
								<h4>For Kids <span>20%</span><i>Discount</i></h4>
							</div>
						</div>
					</div> -->
				</div>
				<div class="col-md-8 w3ls_dresses_grid_right">
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="images/48.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos">
								<h3>Printed <span>Cotton</span> Top</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="images/49.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos1">
								<h3>Printed Blue <span>Cotton</span> Jeans</h3>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="w3ls_dresses_grid_right_grid2">
						<div class="w3ls_dresses_grid_right_grid2_left">
							<h3>Showing Results: 0-1</h3>
						</div>
						<div class="w3ls_dresses_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">

							<!-- products here -->
							<?php show_products(15); ?>


					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="w3l_related_products">
		<div class="container">
			<h3>Related Products</h3>
			<ul id="flexiselDemo2">			
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/31.jpg" alt=" " class="img-responsive">
								<img src="images/32.jpg" alt=" " class="img-responsive">
								<img src="images/33.jpg" alt=" " class="img-responsive">
								<img src="images/34.jpg" alt=" " class="img-responsive">
								<img src="images/31.jpg" alt=" " class="img-responsive">
								<img src="images/32.jpg" alt=" " class="img-responsive">
								<img src="images/33.jpg" alt=" " class="img-responsive">
								<img src="images/34.jpg" alt=" " class="img-responsive">
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="#">Sweater</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$312</span> <i class="item_price">$212</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/32.jpg" alt=" " class="img-responsive" />
								<img src="images/31.jpg" alt=" " class="img-responsive" />
								<img src="images/33.jpg" alt=" " class="img-responsive" />
								<img src="images/34.jpg" alt=" " class="img-responsive" />
								<img src="images/31.jpg" alt=" " class="img-responsive" />
								<img src="images/32.jpg" alt=" " class="img-responsive" />
								<img src="images/33.jpg" alt=" " class="img-responsive" />
								<img src="images/34.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="#">Sweater</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$432</span> <i class="item_price">$323</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/34.jpg" alt=" " class="img-responsive" />
								<img src="images/37.jpg" alt=" " class="img-responsive" />
								<img src="images/30.jpg" alt=" " class="img-responsive" />
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/37.jpg" alt=" " class="img-responsive" />
								<img src="images/30.jpg" alt=" " class="img-responsive" />
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/38.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="#">Sweater</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$323</span> <i class="item_price">$310</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="images/55.jpg" alt=" " class="img-responsive" />
								<img src="images/34.jpg" alt=" " class="img-responsive" />
								<img src="images/30.jpg" alt=" " class="img-responsive" />
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/37.jpg" alt=" " class="img-responsive" />
								<img src="images/30.jpg" alt=" " class="img-responsive" />
								<img src="images/36.jpg" alt=" " class="img-responsive" />
								<img src="images/38.jpg" alt=" " class="img-responsive" />
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="#">Sweater</a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span>$256</span> <i class="item_price">$200</i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
						</div>
					</div>
				</li>
			</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //dresses -->

<script type="text/javascript">
	document.title = "CartOn | Products";
</script>