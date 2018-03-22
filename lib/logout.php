<?php 
	session_start();
	include('CARTON.php');
	$CARTON = "CARTON";
	$CART = new $CARTON;
    $CART->logs($_SESSION['userInfo']['UserID'], 'Logout');

	session_destroy();
    header('Location: /CartOn');
 ?>