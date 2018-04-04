<?php 
	global $FINFO;
	$UserOrders = $FINFO->getOrders($_SESSION['userInfo']['UserID']);

	$step = "";
  	if(isset($_REQUEST['step'])) :
    $step = $_REQUEST['step'];
  	endif;
 ?>



<?php 
	if ($step == "PaymentMethod") {
		?>
			<!-- breadcrumbs -->
				<div class="breadcrumb_dress">
					<div class="container">
						<ul>
							<li><a href="index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
							<li><a href="?content=checkout"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Checkout</a> <i>/</i></li>
							<li>Payment Method</li>
						</ul>
					</div>
				</div>
			<!-- //breadcrumbs -->
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<center><h1>Codes Starts Here: Payment Method</h1></center>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>

		<?php
	}else {
 ?>
 <!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>Checkout</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Checkout</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<?php 
				if (isset($UserOrders[0]['OrderID'])) {
					?><h3>Your shopping cart contains: <span><?php echo count($UserOrders); ?> Products</span></h3><?php
				}else {
					?><h3>Your shopping cart contains: <span>0 Products</span></h3><?php
				}
			 ?>
			
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Quantity</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>

					<?php 
						$totalAmount = 0;
						foreach ($UserOrders as $key => $value) {
							if (isset($UserOrders[0]['OrderID'])) {
							$totalAmount += $value['OrderAmount'] * $value['ProductPrice'];
							?>
								<tr class="rem<?php echo $key + 1 ?>">
									<td class="invert"><?php echo $key+1; ?></td>
									<td class="invert-image"><a href="#"><img src="uploads/products/<?php echo $value['ProductThumb'] ?>" alt=" " class="img-responsive" /></a></td>
									<td class="invert">
										 <div class="quantity"> 
											<div class="quantity-select">                           
												<div class="entry value-minus" value="<?php echo $value['ProductID'] ?>">&nbsp;</div>
												<div class="entry value"><span id="quantity-<?php echo $value['ProductID'] ?>"><?php echo $value['OrderAmount'] ?></span></div>
												<div class="entry value-plus active" value="<?php echo $value['ProductID'] ?>">&nbsp;</div>
											</div>
										</div>
									</td>
									<td class="invert"><?php echo $value['ProductName']; ?></td>
									<td class="invert">&#8369 <span id="table-price-<?php echo $value['ProductID'] ?>"><?php echo $value['ProductPrice']; ?></span></td>
									<td class="invert">
										<div class="rem">
											<div class="close" id="close<?php echo $key + 1 ?>" value="<?php echo $value['OrderID'] ?>"></div>
										</div>
										<script>$(document).ready(function(c) {
											$('#close<?php echo $key + 1 ?>').on('click', function(c){
												$('.rem<?php echo $key + 1 ?>').fadeOut('slow', function(c){
													$('.rem<?php echo $key + 1 ?>').remove();
												});
												});	  
											});
									   </script>
									</td>
								</tr>
							<?php
							}
						}
					 ?>
					
					
						<!--quantity-->
							<script>
							$('.value-plus').on('click', function(){
								var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
								divUpd.text(newVal);
							});

							$('.value-minus').on('click', function(){
								var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
								if(newVal>=1) divUpd.text(newVal);
							});
							</script>
						<!--quantity-->
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4>Total Price : <br>&#8369 <b id="checkout-total"><?php echo number_format((float)$totalAmount, 2, '.', ''); ?></b></h4>
				</div>
				<div class="checkout-right-basket">
					<a href="?content=checkout&step=PaymentMethod">Proceed to Checkout</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

<!-- //checkout -->
<?php 
	}
 ?>
<script type="text/javascript">
	document.title = "CartOn | Checkout";
</script>
