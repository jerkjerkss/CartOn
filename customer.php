<?php include_once('functions.php'); 
	session_start();
	if (isset($_SESSION['userInfo'])) {
      switch ($_SESSION['userInfo']['UserAccess']) {
              case 'customer':
                break;
            }
    }else {
        header('Location: index');
    }
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
	<?php getHeaderObjects($_SESSION['userInfo']); ?>
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
			          'Mail Us' => "?content=mailus",
			          'Settings' => "?content=account"
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
	}else if($pager == "account"){
		___inc_account();
	}else {
		___inc_home();
	}

	getFooterContents();
 ?>
<script type="text/javascript" src="js/cart.js"></script>

</body>
</html>