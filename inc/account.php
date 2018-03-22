<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
   <div class="container"><br>
	<div class="col-md-6">
	  <div class="form-group">

	    <label>First Name</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserFirstName'] ?>" disabled>	
	  </div>
	  <div class="form-group">
	    <label>Last Name</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserLastName'] ?>" disabled>
	  </div>
	   <div class="form-group">
	    <label>Email Address</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserEmail'] ?>" disabled>
	  </div>
	  <div class="form-group">
	    <label>Change Password</label>
	    <input type="password" class="form-control" disabled>
	  </div>

	  <div class="form-group">
	    <label>Phone Number</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserPhone'] ?>" disabled>
	  </div>
	 
	 </div>
	 <div class="col-md-6">
	  <div class="form-group">
	    <label>City</label>
	    <select class="form-control">
	    	<option><?php $city = $_SESSION['userInfo']['UserCity']==""? "Choose City":$_SESSION['userInfo']['UserCity']; echo $city; ?></option>
	     	<option>Philippines</option>
	     	<option>Singapore</option>
	      <option>Korea</option>
	    </select>
  	</div>
  	<div class="form-group">
	    <label>State</label>
	    <select class="form-control">
	    	<option><?php $state = $_SESSION['userInfo']['UserState']==""? "Choose State":$_SESSION['userInfo']['UserState']; echo $state; ?></option>
	     	<option>Philippines</option>
	     	<option>Singapore</option>
	      <option>Korea</option>
	    </select>
  	</div>
	  
	<div class="form-group">
	    <label>Country</label>
	    <select class="form-control">
	    	<option><?php $country = $_SESSION['userInfo']['UserCountry']==""? "Choose Country":$_SESSION['userInfo']['UserCountry']; echo $country; ?></option>
	     	<option>Philippines</option>
	     	<option>Singapore</option>
	      <option>Korea</option>
	    </select>
  	</div>
	  <div class="form-group">
	    <label>Primary Address</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserAddress'] ?>" disabled>
	  </div>
	  <div class="form-group">
	    <label>Secondary Address</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserAddress2'] ?>" disabled>
	  </div>

	  <button type="button" class="btn pull-right">DONE</button>
	 </div> 

	</div>

</form>

</body>
</html>