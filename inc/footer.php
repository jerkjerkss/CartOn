<?php 
	global $FETCHINFO; 

	$content = "";
  	if(isset($_REQUEST['content'])) :
    $content = $_REQUEST['content'];
  	endif;
?>

<div class="footer">

	<?php 
		if ($content != "checkout") {
	 ?>
	<div class="container">
		<div class="w3_footer_grids">
			<div class="col-md-3 w3_footer_grid">
				<h3>Contact</h3>
				<p>This website is under development. Can't contact for now.</p>
				<ul class="address">
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Cavite, <span>Philippines.</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="carton@web.com">carton@web.com</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+63995 508 0999</li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Information</h3>
				<ul class="info"> 
					<li><a href="?content=about">About Us</a></li>
					<li><a href="?content=mailus">Contact Us</a></li>
					
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Category</h3>
				<ul class="info"> 
					<?php 
						$categoryArray = $FETCHINFO::getCategoryArray();

						foreach ($categoryArray as $key => $value) {
							?><li><a href="?content=products&category=<?php echo $value['CategoryID'] ?>"><?php echo $value['CategoryName']; ?></a></li><?php
						}
					 ?>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Follow Us</h3>
				<div class="agileits_social_button">
					<ul>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="google"> </a></li>
						<li><a href="#" class="pinterest"> </a></li>
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<?php } ?>
	<div class="footer-copy">
		<div class="footer-copy1">
			<div class="footer-copy-pos">
				<a href="#header" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
			</div>
		</div>
		<div class="container">
			<p>&copy; 2017 CartOn. All rights reserved | Powered By Cross Developers League: Innovate, Nurture, Excel (XDLine)</p>
		</div>
	</div>
</div>

