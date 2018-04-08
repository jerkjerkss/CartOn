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

	$totalAmount = 0;
	$shippingFee = 100;

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
							<!-- <center>
								<br>
								<br>
								<br>
								<a href="?content=checkout&step=PaymentMethod&PaymentMethod=CoinsPH">Coins.PH</a>
								<br>
								<br>
								<br>
								<a href="?content=checkout&step=PaymentMethod&PaymentMethod=COD">Cash on Delivery</a>
							</center> -->

						<div class="container"><br><br>
						  <div class="row">
						    <div class="col-md-6 col-sm-6">
						      <div class="panel panel-default">
						        <div class="panel-heading">
						          <h3>Order Information</h3>
						        </div>
						        <div class="panel-body">
						          <p class="pull-left"><strong>Personal Information</strong></p><br>
						          <p class="pull-left">Full Name: <?php echo $_SESSION['userInfo']['UserFirstName']." ".$_SESSION['userInfo']['UserLastName']?> </p><br>
						          <p class="pull-left">Shipping Address: <?php echo $_SESSION['userInfo']['UserAddress'] ?> </p><br>
						          <p class="pull-left">Alternative Address: <?php echo $_SESSION['userInfo']['UserAddress2'] ?> </p><br><br>
						          <p class="pull-left"><strong>Order Summary</strong></p><p class="pull-right"></p><br>
						          
						          <?php 
						          	$totalAmount = 0;
						          	foreach ($UserOrders as $key => $value) {
						          		$totalAmount += $value['ProductPrice']
						          		?>
						          			<p class="pull-left"><?php echo $value['ProductName'] ?></p>
						          			<p class="pull-right">PHP <?php echo number_format((float)$value['ProductPrice'], 2, '.', '') ?></p><br>
						          		<?php
						          	}
						           ?>
						           <br>
						          <p class="pull-left"><strong>SUB TOTAL: <h5 class="pull-right">PHP <?php echo number_format((float)$totalAmount, 2, '.', '') ?></p></strong></h5><br>
						          <p class="pull-left">Shipping Fee: </p>
						          			<?php 
						          				if ($totalAmount >= 1000) {
						          					?><p class="pull-right" style="text-decoration: line-through;">Php <?php echo number_format((float)$shippingFee, 2, '.', '') ?></p><br><br><?php
						          				}else {
						          					?><p class="pull-right">Php <?php echo number_format((float)$shippingFee, 2, '.', '') ?></p><br><br><?php
						          				}
						          			 ?>
						          			

				          			<p class="pull-left"><strong>Amount to Pay: <h5 class="pull-right">PHP <?php echo ($totalAmount >= 1000 ? number_format((float)$totalAmount, 2, '.', ''): number_format((float)$totalAmount + $shippingFee, 2, '.', '')) ?></p></strong></h5><br><br><br>
						        </div>
						        <div class="panel-footer">
						          <font face="azo sans"><a href="?content=products"><button class="btn btn-md" style="margin-left: 15px; padding: 5px 80px;">Buy More!</button></a></font>
						        </div>
						      </div> 
						    </div> 
								<div class="col-md-6 col-sm-6">
									
									  <div class="col-md-6">
								      <div class="panel panel-default text-center" id="payment">
								        <div class="panel-heading">
								          <h3>Coins.PH</h3>
								        </div>
								        <div class="panel-body">
								          <p class="text-center" style="margin-left: -20px;">We accept payment through your coins.ph account!</p><br>
								          <img src="images/coinsph.png" id="coinsph">	
								        </div>
								        <div class="panel-footer">
								         
								          <a href="?content=checkout&step=PaymentMethod&PaymentMethod=CoinsPH"><button class="btn btn-lg"><p>Place Order Now!</p></button></a>
								        </div>
								      </div> 
								    </div> 
								    <div class="col-md-6 col-sm-12">
								      <div class="panel panel-default text-center" >
								        <div class="panel-heading">
								          <h3>Cash On Delivery</h3>
								        </div>
								        <div class="panel-body">
								          <p class="text-center" style="margin-left: -20px;">We accept payment through your coins.ph account!</p><br>
								          <img src="images/cod.png" id="coinsph">	
								        </div>
								        <div class="panel-footer">
								          
								          <a href="?content=checkout&step=PaymentMethod&PaymentMethod=COD"><button class="btn btn-lg"><p>Place order now!</p></button></a>
								        </div>
								      </div> 
								    </div> 
								    </div>
								    <div class="text-center"><br>
									    <p>Choose a payment plan that works for you and we offer Cash on Delivery.Full payment is directly to the courier. No partial down is required.</p>
									  </div>
								    </div>
						  </div>
						</div>
						<style type="text/css">
						.btn-lg{
							padding: 3px 20px;
						}
						#payment{
							background-color: 
						}
						.pull-right {
							margin-right: 40px;
						}
						#coinsph{
							width: 196px;
							height: 110px;
							margin-left: -32px;
						}
							.panel {
							    border: 1px solid #029f92; 
							    border-radius:0;
							    transition: box-shadow 0.5s;
							}
							.panel:hover {
							    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
							}
							.panel-footer .btn:hover {
							    border: 1px solid #f4511e;
							    background-color: #fff;
							    color: #f4511e;
							}
							.panel-heading {
							    color: #fff !important;
							    background-color: #029f92 !important;
							    padding: 25px;
							    border-bottom: 1px solid transparent;
							}
							.panel-footer {
							    background-color: #fff;
							}
							.panel-footer h3 {
							    font-size: 32px;
							}
							.panel-footer h4 {
							    color: #aaa;
							    font-size: 14px;
							}
							.panel-footer .btn {
							    margin: 15px 0;
							    background-color: #f4511e;
							    color: #fff;
							}
						</style>
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
