<?php


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

