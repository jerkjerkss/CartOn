<?php include_once('functions.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>CartOn</title>
<?php 

  getHeaderAssets();
  $pager = "";
  if(isset($_REQUEST['content'])) :
    $pager = $_REQUEST['content'];
  endif;
 ?>
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3l_login">
				<a href="lib/logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"><br>Logout</span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.html">CartOn Shopping <span> Pasok mga suki </span></a></h1>
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
			


			<?php getCart(); ?>




			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<?php 
			       ___navigation_bar(array(
			          'Home' => "index",
			          'Products' => "?content=products",
			          'About' => "?content=about",
			          'Mail Us' => "?content=mailus"
			        ));
		        ?>
			</nav>
		</div>
	</div>
<!-- //header -->
<?php 
	if ($pager == "products") {
		___inc_products();
	}else if($pager == "about"){
		___inc_about();
	}else if($pager == "checkout"){
		___inc_checkout();
	}else if($pager == "mailus"){
		___inc_mailus();
	}else {
		___inc_home();
	}

	getFooterContents();
 ?>


</body>
</html>