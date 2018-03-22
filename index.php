<?php include_once('functions.php'); 
	session_start();
	if (isset($_SESSION['userInfo'])) {
      switch ($_SESSION['userInfo']['UserAccess']) {
            case 'customer':
                header('Location: customer');
                break;
            case 'client':
                header('Location: client');
                break;
            }
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
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						Login Now!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<div class="alert alert-danger fade in" style="display: none" id="signin-primary-alert">
													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
												  	<strong>LOGIN FAILED!</strong><p id="alertMsg">Incorrect Data</p>
												</div>
												<input name="Email" placeholder="Email Address" type="text" required="" id="signin-email" class="input-sign-in">						
												<input name="Password" placeholder="Password" type="password" required="" id="signin-pwd" class="input-sign-in">										
												<div class="sign-in">
													<input type="submit" value="Sign in" id="btn-signin" />
												</div>
												<img src="images/loading.gif" id="signin-loading" style="display: none">
											</div>
										</div> 
									</div>	

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<div class="alert alert-danger fade in" style="display: none" id="signup-primary-alert">
													<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
												  	<strong>FAILED!</strong><p id="alertMsg">Alert Message</p>
												</div>
												<input placeholder="First Name" name="First Name" type="text" required="" id="signup-fname" class="input-sign-up">
												<input placeholder="Last Name" name="Last Name" type="text" required="" id="signup-lname" class="input-sign-up">	
												<input placeholder="Email Address" name="Email" type="email" required="" id="signup-email" class="input-sign-up">	
												<label class="alert alert-warning" id="validateNote-email" style="display: none">The Email Address Format is Invalid</label>	
												<input placeholder="Password" name="Password" type="password" required="" id="signup-pwd" maxlength="32" class="input-sign-up">
												<label class="alert alert-warning" id="validateNote-password" style="display: none">The Password Must Be Alphanumeric and atleast 8 characters</label>	
												<input placeholder="Confirm Password" name="Password" type="password" required="" id="signup-cpwd" maxlength="32" class="input-sign-up">
												<label class="alert alert-warning" id="validateNote-cpassword" style="display: none">Password not matched</label>
												<div class="sign-up">
													<input type="submit" value="Create Account" id="btn-signup" />
												</div>
												<img src="images/loading.gif" id="signup-loading" style="display: none">
												<br>
												
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">
								OR</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">
										Sign in with</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<?php getHeaderObjects(0); ?>
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
	}else if($pager == "mailus"){
		___inc_mailus();
	}else {
		___inc_home();
	}

	getFooterContents();
 ?>

<script type="text/javascript" src="js/login.js"></script>



</body>
</html>