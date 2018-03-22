<?php include_once('functions.php'); 
	session_start();
	if (isset($_SESSION['userInfo'])) {
      switch ($_SESSION['userInfo']['UserAccess']) {
            case 'customer':
            	break;
            case 'client':
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
			          'Home' => "client",
			          'Products' => "?content=products",
			          'Orders' => "?content=orders",
			          'Management' => "?content=management",
			          'Settings' => "?content=account"
			        ));
		        ?>
			</nav>
		</div>
	</div>
<!-- //header -->
<?php 
	if ($pager == "products") {
		___client_products();
	}else if($pager == "orders"){
		___client_orders();
	}else if($pager == "management"){
		___client_management();
	}else if($pager == "account"){
		___client_account();
	}else {
		___client_dashboard();
	}

 ?>


</body>
</html>