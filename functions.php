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

function getFooterContentsClient(){
    include('inc/client-footer.php');
}

function getHeaderObjects($userInfoArray){

	?>
	<style type="text/css">
		#sign-out
		{
			margin-top: 12px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<div class="header" id="header">
		<div class="container">
			<div class="w3l_login">
				<?php 
					if (basename($_SERVER["SCRIPT_FILENAME"]) == "customer.php" || basename($_SERVER["SCRIPT_FILENAME"]) == "client.php") {
						?> 
							<a id="accounts" href="lib/logout.php"><span class="fa fa-sign-out fa-lg" id="sign-out" aria-hidden="true"><br></span><font face="azo sans"><span id="out">Logout</span></font></a>
						<?php
					}else {
						?>
							<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
						<?php
					}
				 ?>
			</div>
			<div class="w3l_logo">
				<a href="index"><img style="max-width: 250px;margin:  0 -1px 0;" src="images/texticon.png">
				</a>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="" method="get">
						<input type="text" name="content" value="products" style="display: none;">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<?php 
				if (basename($_SERVER["SCRIPT_FILENAME"]) == "customer.php") {
					getCart($userInfoArray);
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

function getCart($userInfoArray){
	global $FINFO;
	?>
	<div class="cart box_1">
		<a href="?content=checkout">
			<div class="total" style="margin-top: 10px;">Php <span id="cart-price"><?php echo number_format((float)$FINFO->getItems($userInfoArray['UserID'])['Price'], 2, '.', ''); ?></span> (<span id="cart-items"><?php echo $FINFO->getItems($userInfoArray['UserID'])['Items']; ?></span> items)</div>
			<img src="images/bag.png" alt="" />
		</a>
		<p><a class="simpleCart_empty" id="client_name"><?php echo $userInfoArray['UserFirstName']." ".$userInfoArray['UserLastName']; ?></a></p>
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
	include('inc/account.php');
	inject_asset('stylesheet', 'css/account.css');
}


function ___client_dashboard(){
	include('inc/client-dashboard.php');
	inject_asset('stylesheet', 'css/dashboard.css');
	inject_asset('stylesheet', 'css/font-awesome.min.css');
	inject_asset('stylesheet', 'css/helper-dashboard.css');
	inject_asset('stylesheet', 'css/style-dashboard.css');
	inject_asset('script', 'js/raphael-min.js');
	inject_asset('script', 'js/morris.js');
	inject_asset('script', 'js/dashboard1-init.js');
	inject_asset('script', 'js/scripts.js');
	
}

function ___client_products(){
	include('inc/client-products.php');
	inject_asset('stylesheet', 'css/products.css');
}

function ___client_orders(){
	include('inc/client-orders.php');
	inject_asset('stylesheet', 'css/orders.css');
}

function ___client_management(){
	include('inc/client-management.php');
}

function ___client_account(){
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



function show_products($toShow = -1, $filter = 0, $Search = -1){
	global $FETCHINFO;
	$productArray = $FETCHINFO::getProductArray();

	if ($Search != -1) {
		$productArray = $FETCHINFO::searchProducts($Search);
	}
	
	foreach ($productArray as $key => $products) {

		if ($key == $toShow) {
			break;
		}
		if ($products['SubCategoryID'] != $filter && $filter !=0) {
			continue;
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
				<p><span></span> Php <i class="item_price" id="price-<?php echo $products['ProductID'] ?>"><?php echo $products['ProductPrice']; ?></i></p>
				<p><a class="item-add scroll" href="#header" value='<?php echo $products['ProductID'] ?>'>Add to cart</a></p>
			</div>
			
				<?php 
					if ($dateRange <= 7) {
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
								<p><a class="item-add" href="#" value='<?php echo $products['ProductID'] ?>'>Add to cart</a></p>
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
	$arraySubNav = array('best-sellers' => 'Best Sellers', 
						 'sales' => 'Sales',
						 'new-arivals' => 'New Arrivals',
						 'top-search' => 'Top Search');

	?><ul id="myTab" class="nav nav-tabs" role="tablist"><?php
	foreach ($arraySubNav as $key => $value) {
		?>
			<li role="presentation" class="<?php echo ($key == 'best-sellers') ? 'active' : '' ?>"><a href="#<?php echo $key ?>" id="<?php  echo $key?>-tab" role="tab" data-toggle="tab" aria-controls="home"><?php echo $value; ?></a></li>
		<?php
	}
	?></ul><div id="myTabContent" class="tab-content"><?php
	foreach ($arraySubNav as $key => $value) {
		?>
			<div role="tabpanel" class="tab-pane fade <?php echo ($key == 'best-sellers') ? 'active' : '' ?> in" id="<?php echo $key ?>" aria-labelledby="<?php echo $key ?>-tab">
				<div class="agile_ecommerce_tabs">
					<?php show_products(3); ?>
					<div class="clearfix"> </div>
				</div>
			</div>
		<?php 
	}
	 ?>
	</div>
	<?php

}
