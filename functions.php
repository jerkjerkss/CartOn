<?php
include('lib/CARTON.php');
include('lib/fetchinfo.php');

$CARTON = "CARTON";
$FETCHINFO = "FetchInfo";
$CART = new $CARTON;
$FINFO = new $FETCHINFO;

function getHeaderAssets(){
    include('inc/header.php');
}

function getFooterContents(){
    include('inc/footer.php');
}

function getHeaderObjects(){
	?>
	<div class="header">
		<div class="container">
			<div class="w3l_login">
				<?php 
					if (basename($_SERVER["SCRIPT_FILENAME"]) == "customer.php") {
						?> 
							<a href="lib/logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"><br>Logout</span></a>
						<?php
					}else {
						?>
							<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
						<?php
					}
				 ?>
			</div>
			<div class="w3l_logo">
				<a href="index"><img style="max-width: 277px;margin: 2px 0 -23px 0;" src="/CartOn/images/texticon.png">
				</a>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<?php 
				if (basename($_SERVER["SCRIPT_FILENAME"]) == "customer.php") {
					getCart();
				}
			 ?>


			<div class="clearfix"> </div>
		</div>
	</div>
	<?php
}


function ___navigation_bar($nav_array){
	?>
		<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">

					<?php 
						foreach ($nav_array as $nav => $link) {
							?>
								<li><a href="<?php echo $link; ?>"><?php echo $nav; ?></a></li>	
							<?php
						}
					 ?>

					</ul>
				</div
	<?php
}

function getCart(){
	?>
	<div class="cart box_1">
		<a href="?content=checkout">
			<div class="total">
			<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
			<img src="images/bag.png" alt="" />
		</a>
		<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
		<div class="clearfix"> </div>
	</div>	
	<?php
}

function ___inc_products(){
    include('inc/products.php');
}

function ___inc_about(){
    include('inc/about.php');
}

function ___inc_checkout(){
    include('inc/checkout.php');
}

function ___inc_mailus(){
    include('inc/mail.php');
}

function ___inc_home(){
    include('inc/home.php');
}

function ___inc_account(){
	inject_asset('stylesheet', 'css/account.css');
	include('inc/account.php');
}

// asset injector
function inject_asset($type, $url){
	if ($type == 'stylesheet') {
	?>
	<script type="text/javascript">
		$('head').append('<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>">');
	</script>
	<?php
	}
	else if ($type=='script') {
	?>
	<script type="text/javascript">
		$('head').append('<script type="text/javascript" src="<?php echo $url; ?>"><\/script>');
	</script>
	<?php
	}
}


function product_category(){
	global $FETCHINFO;
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
				<li><a href="#">Product 2</a></li>
				<li><a href="#">Product 2</a></li>
				<li><a href="#">Product 2</a></li>
				<li><a href="#">Product 2</a></li>
			</ul>
		  </div>
		</div>
	  </div>
	<?php
	}
}
function show_products($toShow = -1){
	global $FETCHINFO;
	$productArray = $FETCHINFO::getProductArray();
	foreach ($productArray as $key => $products) {

		if ($key == $toShow) {
			break;
		}
		$ImageArray = explode("|||", $products['ProductImage']);
		$datetime1 = date_create($products['ProductUpdateDate']);
		$datetime2 = date_create(date("Y-m-d H:i:s"));
		$dateRange = date_diff($datetime1, $datetime2)->format('%a');
	?>
	<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
		<div class="agile_ecommerce_tab_left dresses_grid">
			<div class="hs-wrapper hs-wrapper2">
				<?php 
					for ($i=0; $i < 7; $i++) { 
							for ($j=0; $j < count($ImageArray); $j++) { 
								?>
									<img src="uploads/products/<?php echo $ImageArray[$j] ?>" alt="<?php echo $ImageArray[$j] ?>" class="img-responsive" />
								<?php
							}
						
					}
				 ?>
				<div class="w3_hs_bottom w3_hs_bottom_sub1">
					<ul>
						<li>
							<a href="#" data-toggle="modal" data-target="#productModal-<?php echo $products['ProductID']?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
						</li>
					</ul>
				</div>
			</div>
			<h5><a href="#" title="<?php echo $products['ProductName'] ?>"><?php echo $products['ProductName'] ?></a></h5>
			<div class="simpleCart_shelfItem">
				<p><span>$420</span> <i class="item_price">Php <?php echo $products['ProductPrice']; ?></i></p>
				<p><a class="item_add" href="#">Add to cart</a></p>
			</div>
			
				<?php 
					if ($dateRange <= 10) {
						echo '<div class="dresses_grid_pos"><h6>New</h6></div>';
					}
				 ?>
			
		</div>
	</div>



	<!-- MODAL -->

	<div class="modal video-modal fade" id="productModal-<?php echo $products['ProductID']?>" tabindex="-1" role="dialog" aria-labelledby="productModal-<?php echo $products['ProductID']?>">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<!-- <img src="images/39.jpg" alt=" " class="img-responsive" /> -->
					
							<img src="uploads/products/<?php echo $products['ProductThumb'] ?>" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4><?php echo $products['ProductName']; ?></h4>
							<p><?php echo $products['ProductLongDesc'] ?></p>
							<div class="rating">
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star-.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="rating-left">
									<img src="images/star.png" alt=" " class="img-responsive" />
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="modal_body_right_cart simpleCart_shelfItem">
								<p><span>$320</span> <i class="item_price">Php <?php echo $products['ProductPrice']; ?></i></p>
								<p><a class="item_add" href="#">Add to cart</a></p>
							</div>
							<h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span>Red</a></li>
									<li><a href="#" class="brown"><span></span>Yellow</a></li>
									<li><a href="#" class="purple"><span></span>Purple</a></li>
									<li><a href="#" class="gray"><span></span>Violet</a></li>
								</ul>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php
	}
}

function mostRecentProducts(){
	?>
	<ul id="myTab" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Best Sellers</a></li>
		<li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab" aria-controls="skirts">Sales</a></li>
		<li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab" aria-controls="watches">New Arrivals</a></li>
		<li role="presentation"><a href="#sandals" role="tab" id="sandals-tab" data-toggle="tab" aria-controls="sandals">Top Search</a></li>
		<!-- <li role="presentation"><a href="#jewellery" role="tab" id="jewellery-tab" data-toggle="tab" aria-controls="jewellery">Promo Products</a></li> -->
	</ul>

	
	<?php 
	 ?>
	<?php

}
