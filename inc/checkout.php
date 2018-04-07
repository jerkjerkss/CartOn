<?php 
	global $FINFO;
	$UserOrders = $FINFO->getOrders($_SESSION['userInfo']['UserID']);

	$step = "";
  	if(isset($_REQUEST['step'])) :
    $step = $_REQUEST['step'];
  	endif;

  	$Pmethod = "";
  	if(isset($_REQUEST['PaymentMethod'])) :
    $Pmethod = $_REQUEST['PaymentMethod'];
  	endif;
 ?>



<?php 
	if ($step == "PaymentMethod") {
		?>
			
			<?php 
				if ($Pmethod == "CoinsPH") {
					?>
						<!-- breadcrumbs -->
						<div class="breadcrumb_dress">
							<div class="container">
								<ul>
									<li><a href="index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
									<li><a href="?content=checkout"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Checkout</a> <i>/</i></li>
									<li><a href="?content=checkout&step=PaymentMethod"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span> Payment Method</a> <i>/</i></li>
									<li>Coins.PH</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->
						<div class="container"><br><br>
						    <div class="row">

						        <div class="col-md-3"></div>

						        <div class="col-md-6 center-block">
						            <div class="panel panel-primary">
						                <div class="panel-heading panel-default">
						                    <h3 class="panel-title" style="color: white; margin: 10px;">
						                        <font face="Azo sans light">Pay order with Coins.ph Wallet</font>
						                    </h3>
						                </div>
						                <div class="panel-body">
						                    <form role="form">
							                    <div class="row">
							                    	<div class="form-group col-md-12">
								                        <label style="margin-left: -15px;">Wallet Address</label>
								                        <div class="input-group col-md-12">
								                            <input style="margin-left: -15px;" type="text" class="form-control" placeholder="Enter you Wallet Address"
								                                required autofocus />
								                        </div>
								                    </div>

							                        <div class="col-md-12" style="margin-left: -15px;">
							                            <div class="form-group">
							                             <form action="" method="post"><br>
					                                        Upload a screenshot of your payment:<p><br></p>
					                                        <input type="file">
							                             </form>
							                            </div>
							                        </div>
							                    </div>
						                    </form>
						                </div>
						            </div>
						            <ul class="nav nav-pills nav-stacked">
						                <li class="active"><a href="#"><span class="badge pull-left"><span class="glyphicon"></span>PHP 100.00</span>&nbsp;&nbsp;Will be deducted to your Peso wallet</span></a>
						                </li>
						            </ul>
						            <br/>
						            
						           <a href="#" class="btn btn-success btn-lg btn-block" style="background-color: #00b1a2">Pay</a>
						        </div>
						    </div>
						</div>	
					<?php
				}else if ($Pmethod == "COD") {
					?>
						<!-- breadcrumbs -->
						<div class="breadcrumb_dress">
								<div class="container">
									<ul>
										<li><a href="index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
										<li><a href="?content=checkout"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Checkout</a> <i>/</i></li>
										<li><a href="?content=checkout&step=PaymentMethod"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>Payment Method</a> <i>/</i></li>
										<li>Cash on Delivery</li>
									</ul>
								</div>
							</div>
						<!-- //breadcrumbs -->
						
					<?php

				}else {
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
						<center>
							<br>
							<br>
							<br>
							<a href="?content=checkout&step=PaymentMethod&PaymentMethod=CoinsPH">Coins.PH</a>
							<br>
							<br>
							<br>
							<a href="?content=checkout&step=PaymentMethod&PaymentMethod=COD">Cash on Delivery</a>
						</center>
					<?php
				}
			?>
			

			

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
