
<form>
   <div class="container"><br>
	<div class="col-md-6">
	  <div class="form-group">

	    <label>First Name</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserFirstName'] ?>" id="account-fname">	
	  </div>
	  <div class="form-group">
	    <label>Last Name</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserLastName'] ?>" id="account-lname">
	  </div>
	   <div class="form-group">
	    <label>Email Address</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserEmail'] ?>" disabled>
	  </div>
	  <div class="form-group">
	    <label>Change Password</label>
	    <input type="password" class="form-control" placeholder="****************" disabled id="account-password">
	  </div>

	  <div class="form-group">
	    <label>Phone Number</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserPhone'] ?>" id="account-phone">
	  </div>
	 
	 </div>
	 <div class="col-md-6">
	  <div class="form-group">
	    <label>City</label>
	    <select class="form-control" id="account-city">
	    	<option><?php $city = $_SESSION['userInfo']['UserCity']==""? "Choose City":$_SESSION['userInfo']['UserCity']; echo $city; ?></option>
	     	<option>Philippines</option>
	     	<option>Singapore</option>
	      <option>Korea</option>
	    </select>
  	</div>
  	<div class="form-group"">
	    <label>State</label>
	    <select class="form-control" id="account-state">
	    	<option><?php $state = $_SESSION['userInfo']['UserState']==""? "Choose State":$_SESSION['userInfo']['UserState']; echo $state; ?></option>
	     	<option>Philippines</option>
	     	<option>Singapore</option>
	      <option>Korea</option>
	    </select>
  	</div>
	  
	<div class="form-group">
	    <label>Country</label>
	    <select class="form-control" id="account-country">
	    	<option><?php $country = $_SESSION['userInfo']['UserCountry']==""? "Choose Country":$_SESSION['userInfo']['UserCountry']; echo $country; ?></option>
	     	<option>Philippines</option>
	     	<option>Singapore</option>
	      <option>Korea</option>
	    </select>
  	</div>
	  <div class="form-group">
	    <label>Primary Address</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserAddress'] ?>" id="account-address">
	  </div>
	  <div class="form-group">
	    <label>Secondary Address</label>
	    <input type="text" class="form-control" placeholder="<?php echo $_SESSION['userInfo']['UserAddress2'] ?>" id="account-address2">
	  </div>

	  <button type="button" class="btn pull-right" id="account-done"><font face="azo sans">DONE</font></button>
	 </div> 

	</div>

</form>

<script>

	$('#account-done').click(function(){
		for (var i = 0; i < 8; i++) {
			if (i == 0 && $('#account-fname').val().length > 3) {
				updateInfo('fname', $('#account-fname').val());
			}else if (i == 1 && $('#account-lname').val().length > 3) {
				updateInfo('lname', $('#account-lname').val());
			}else if (i == 2 && $('#account-phone').val().length > 5) {
				updateInfo('phone', $('#account-phone').val());
			}else if (i == 3 && $('#account-city').val().length > 5) {
				updateInfo('city', $('#account-city').val());
			}else if (i == 4 && $('#account-state').val().length > 5) {
				updateInfo('state', $('#account-state').val());
			}else if (i == 5 && $('#account-country').val().length > 5) {
				updateInfo('country', $('#account-country').val());
			}else if (i == 6 && $('#account-address').val().length > 5) {
				updateInfo('address', $('#account-address').val());
			}else if (i == 7 && $('#account-address2').val().length > 5) {
				updateInfo('address2', $('#account-address2').val());
			}
		}

	});

	function updateInfo(target, value){
		var data = new Object();
    	data["request_type"] = "request-updateinfo";
    	data["target"] = target;
    	data["value"] = value;

        $.post("lib/ajax-request.php", {data: data}, function(callback){
			location.reload();
        });
	}

</script>

