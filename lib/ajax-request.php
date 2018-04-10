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
	}else if ($data['request_type'] == "request-updateinfo") {
		updateInfo($data['target'], $data['value']);
	}else if ($data['request_type'] == "request-order") {
		customerOrder($data['PaymentMethod']);
	}else if ($data['request_type'] == "request-processUpdate") {
		processUpdate($data['currentProcess'], $data['action'], $data['OrderID']);
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

			$CART->logs($userInfo['UserID'], 'Login');
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

	function updateInfo($target, $value){
		session_start();
		$CARTON = "CARTON";
		$CART = new $CARTON;

		$UserID = $_SESSION['userInfo']['UserID'];

		if ($target == "fname") {
			$target = "UserFirstName";
			$_SESSION['userInfo']['UserFirstName'] = $value;
		}else if ($target == "lname") {
			$target = "UserLastName";
			$_SESSION['userInfo']['UserLastName'] = $value;
		}else if ($target == "phone") {
			$target = "UserPhone";
			$_SESSION['userInfo']['UserPhone'] = $value;
		}else if ($target == "city") {
			$target = "UserCity";
			$_SESSION['userInfo']['UserCity'] = $value;
		}else if ($target == "state") {
			$target = "UserState";
			$_SESSION['userInfo']['UserState'] = $value;
		}else if ($target == "country") {
			$target = "UserCountry";
			$_SESSION['userInfo']['UserCountry'] = $value;
		}else if ($target == "address") {
			$target = "UserAddress";
			$_SESSION['userInfo']['UserAddress'] = $value;
		}else if ($target == "address2") {
			$target = "UserAddress2";
			$_SESSION['userInfo']['UserAddress2'] = $value;
		}

		$updateInfo = $CARTON::update('users', array($target => $value),"`UserID` = '$UserID'");

	}

	function customerOrder($paymentType){
		session_start();
		$CARTON = "CARTON";
		$CART = new $CARTON;
		$UserID = $_SESSION['userInfo']['UserID'];

		if ($paymentType == "COD") {
			$setOrder = $CARTON::update('orders', array("OrderStatus" => "Pending", "OrderPaymentMethod" => 'Cash On Delivery'),"`UserID` = '$UserID' AND `OrderStatus` = 'Cart'");
		}else if ($paymentType == "COINS.PH") {
			$setOrder = $CARTON::update('orders', array("OrderStatus" => "Pending", "OrderPaymentMethod" => 'COINS.PH'),"`UserID` = '$UserID' AND `OrderStatus` = 'Cart'");
		}

	}

	function processUpdate($currentProcess, $action, $OrderID){
		session_start();
		$CARTON = "CARTON";
		$CART = new $CARTON;
		
		if ($currentProcess == "pending") {
			if ($action == "process") {
				$setOrder = $CARTON::update('orders', array("OrderStatus" => "Processing"),"`OrderID` = '$OrderID'");
			}

		}else if ($currentProcess == "processing") {
			if ($action == "deliver") {
				$setOrder = $CARTON::update('orders', array("OrderStatus" => "Shipping"),"`OrderID` = '$OrderID'");
			}else if ($action == "cancel") {
				$setOrder = $CARTON::update('orders', array("OrderStatus" => "Pending"),"`OrderID` = '$OrderID'");
			}


		}else if ($currentProcess == "shipping") {
			if ($action == "done") {
				$setOrder = $CARTON::update('orders', array("OrderStatus" => "Delivered"),"`OrderID` = '$OrderID'");
			}else if ($action == "cancel") {
				$setOrder = $CARTON::update('orders', array("OrderStatus" => "Processing"),"`OrderID` = '$OrderID'");
			}


		}else if ($currentProcess == "delivered") {
			if ($action == "cancel") {
				$setOrder = $CARTON::update('orders', array("OrderStatus" => "Shipping"),"`OrderID` = '$OrderID'");
			}
		}

	}


 ?>