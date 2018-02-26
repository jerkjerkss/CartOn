<?php


function getHeaderAssets(){
    include('inc/header.php');
}

function getFooterContents(){
    include('inc/footer.php');
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

