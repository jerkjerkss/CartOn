<?php 
	include("CARTON.php");
	$data = $_POST['data'];

	if ($data['request_type'] == "request-signin") {
		signin($data['email'], $data['pwd']);
	}else if($data['request_type'] == "request-signup"){
		signup($data['fname'], $data['lname'], $data['email'], $data['pwd'], $data['cpwd']);
	}else if ($data['request_type'] == "request-addcart") {
		addcart($data['ProductID']);
	}else if ($data['request_type'] == "request-subcart") {
		addcart($data['ProductID'], -1);
	}else if ($data['request_type'] == "request-removecart") {
		removecart($data['OrderID']);
	}

	function signup($fname, $lname, $email, $password){
		session_start();
		$CARTON = "CARTON";
		$CART = new $CARTON;	
		$salted_password = $CART->encrypt_password($password);

		$check_email = $CARTON::select("*", "users", "`UserEmail` = '$email'")[0];

		if ($check_email != "") {
			session_destroy();
			echo "EMAIL ALREADY EXIST";
		}else {
			$addInUsers = $CART->insert("users", array(
				"UserFirstName" => $fname,
				"UserLastName" => $lname,
				"UserEmail" => $email,
				"UserPassword" => $salted_password,
				"UserAccess" => 'customer'), "SIGNUP SUCCESSFULLY");
			echo $addInUsers;
		}

	}

	function signin($email, $password){
		session_start();
		$CARTON = "CARTON";
		$CART = new $CARTON;	
		$salted_password = $CART->encrypt_password($password);
		$userInfo = $CARTON::select("*", "users", "`UserEmail` = '$email' && `UserPassword` = '$salted_password'")[0];

		if ($userInfo == "") {
			session_destroy();
			echo "MATCH NOT FOUND";
		}else {
			$_SESSION['userInfo'] = $userInfo;
			echo 'LOGIN SUCCESS: '.$_SESSION['userInfo']['UserAccess'];

			if ($_SESSION['userInfo']['UserAccess'] == "client") {
				$UserID = $_SESSION['userInfo']['UserID'];
				$clientInfo = $CARTON::select("*", "seller", "`UserID` = '$UserID'")[0];
				$_SESSION['clientInfo'] = $clientInfo;
			}
		}

	}

	function addcart($ProductID, $adder = 1){
		session_start();
		$CARTON = "CARTON";
		$CART = new $CARTON;

		$UserID = $_SESSION['userInfo']['UserID'];
		$insertArray = array('UserID' => $UserID, 
							 'ProductID' => $ProductID,
							 'OrderAmount' => '1',
							 'OrderStatus' => 'Cart');

		$checkProduct = $CARTON::select('*', 'orders', "`UserID` = '$UserID' && `ProductID` = '$ProductID' && `OrderStatus` = 'Cart'")[0];

		if ($checkProduct == "") {
			$addCart = $CARTON::insert('orders', $insertArray, 'SUCCESS: ADD CART');
		}else {
			$newAmount = $checkProduct['OrderAmount'] + $adder;

			if ($newAmount == 0) {
				echo "Stop";
			}else {
				$addCart = $CARTON::update('orders', array('OrderAmount' => $newAmount),"`UserID` = '$UserID' && `ProductID` = '$ProductID' && `OrderStatus` = 'Cart'", 'SUCCESS: UPDATE CART');
			}
			
		}
	}

	function removecart($OrderID){
		session_start();
		$CARTON = "CARTON";
		$CART = new $CARTON;

		$UserID = $_SESSION['userInfo']['UserID'];

		$removeCart = $CARTON::update('orders', array('OrderStatus' => 'Remove', 'OrderAmount' => 0),"`UserID` = '$UserID' && `OrderID` = '$OrderID'", 'SUCCESS: UPDATE CART');

	}


 ?>