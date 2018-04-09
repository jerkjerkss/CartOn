	<?php global $FETCHINFO; ?>
<!-- banner -->
	<div class="banner1" id="home1">
		<div class="container">
			<h2 style="padding-left: 0px;">trendy fashion dresses
				<span style="margin-left: 0px; margin-bottom: 0px;margin-top: 0px;">up to</span> 
				30% <i>Discount</i></h2>
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
									$subCategoryArray = $FETCHINFO::getSubCategoryArray();
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
												<?php 
													foreach ($subCategoryArray as $keys => $values) {
														if ($values['CategoryID'] == $value['CategoryID']) {
															?>
																<li><a href="?content=products&filter=<?php echo $values['SubCategoryID'] ?>"><?php echo $values['SubCategoryName'] ?></a></li>
															<?php
														}
													}
												 ?>
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
								<h3 style="text-shadow: 0px 0px 15px rgba(0, 0, 28, 0.7);">Latest <span>Gadgets</span> Today</h3>
							</div>
						</div>
					</div>
					<div class="col-md-6 w3ls_dresses_grid_right_left">
						<div class="w3ls_dresses_grid_right_grid1">
							<img src="images/49.jpg" alt=" " class="img-responsive" />
							<div class="w3ls_dresses_grid_right_grid1_pos1">
								<h3 style="text-shadow: 0px 0px 15px rgba(0, 0, 28, 0.7);">Branded<span>Stylish</span> Shoes</h3>
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
							<?php 
								if (isset($_REQUEST['Search'])) {
									show_products(15, 0 , $_REQUEST['Search']);
								}else if(isset($_REQUEST['filter'])){
									show_products(15, $_REQUEST['filter']);
								}else {
									show_products(15); 
								}
								

							?>


					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
	document.title = "CartOn | Products";
</script>
