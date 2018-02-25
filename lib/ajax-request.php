<?php 
	include("CARTON.php");
	$data = $_POST['data'];

	if ($data['request_type'] == "request-signin") {
		signin($data['email'], $data['pwd']);
	}else if($data['request_type'] == "request-signup"){
		signup($data['fname'], $data['lname'], $data['email'], $data['pwd'], $data['cpwd']);
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
		}
	}


 ?>