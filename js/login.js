function signup(){

	$("#signup-loading").show();
    $(".sign-up").hide();
    $("#signup-primary-alert").hide();

    setTimeout(function(){
    	var data = new Object();
    	data["request_type"] = "request-signup";
    	data["fname"] = $("#signup-fname").val();
    	data["lname"] = $("#signup-lname").val();
    	data["email"] = $("#signup-email").val();
    	data["pwd"] = $("#signup-pwd").val();
    	data["cpwd"] = $("#signup-cpwd").val();

        $.post("lib/ajax-request.php", {data: data}, function(callback){
            if(callback == "EMAIL ALREADY EXIST"){
            	$('#alertMsg').text('Email already exist');
                $("#signup-loading").hide();
			    $(".sign-up").show();
    			$("#signup-primary-alert").show();
            }else{
            	$("#signup-loading").hide();
			    $(".sign-up").show();
            }
		    alert(callback);
        });
    }, 1000);
}

function signin(){

	$("#signin-loading").show();
    $(".sign-in").hide();
    $("#signin-primary-alert").hide();

    setTimeout(function(){
    	var data = new Object();
    	data["request_type"] = "request-signin";
    	data["email"] = $("#signin-email").val();
    	data["pwd"] = $("#signin-pwd").val();

        $.post("lib/ajax-request.php", {data: data}, function(callback){
            if(callback == "LOGIN SUCCESS: customer"){
            	location.reload();
            }else {
            	$("#signin-loading").hide();
			    $(".sign-in").show();
			    $("#signin-primary-alert").show();
            }

        });
    }, 1000);
}

$('#btn-signin').click(function(){
	signin();
});


$('#btn-signup').click(function(){
	if ($("#signup-fname").val() == "") {
    	$('#alertMsg').text('First Name Field is Required');
	    $("#signup-primary-alert").show();
	}else if ($("#signup-lname").val() == "") {
    	$('#alertMsg').text('Last Name Field is Required');
	    $("#signup-primary-alert").show();
	}else if ($("#signup-email").val() == "") {
    	$('#alertMsg').text('Email Field is Required');
	    $("#signup-primary-alert").show();
	}else if (validateEmail($("#signup-email").val()) == false) {
    	$('#alertMsg').text('Invalid Email Format');
	    $("#signup-primary-alert").show();
	}else if ($("#signup-pwd").val() == "") {
    	$('#alertMsg').text('Password Field is Required');
	    $("#signup-primary-alert").show();
	}else if (validatePassword($("#signup-pwd").val()) == false) {
    	$('#alertMsg').text('The Password Must Be Alphanumeric and 8-32 characters');
	    $("#signup-primary-alert").show();
	}else if ($("#signup-cpwd").val() == "") {
    	$('#alertMsg').text('Confirm Password Field is Required');
	    $("#signup-primary-alert").show();
	}else if ($("#signup-cpwd").val() != $('#signup-pwd').val()) {
    	$('#alertMsg').text('Conrim Password did not match');
	    $("#signup-primary-alert").show();
	}else {
		signup();
	}

});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validatePassword(password){
	var re = /^.*(?=.{8,})(?=.*[a-zA-Z])(?=.*\d).*$/;
	return re.test(password);
}


$("#signup-pwd").on('input', function(){
	if (validatePassword($(this).val())) {
		$('#validateNote-password').hide();
	}else {
		$('#validateNote-password').show();
	}

	if ($(this).val() == $('#signup-cpwd').val()) {
		$('#validateNote-cpassword').hide();
	}
});

$("#signup-email").on('input', function(){
	if (validateEmail($(this).val())) {
		$('#validateNote-email').hide();
	}else {
		$('#validateNote-email').show();
	}
});

$("#signup-cpwd").on('input', function(){
	if ($(this).val() == $('#signup-pwd').val()) {
		$('#validateNote-cpassword').hide();
	}else {
		$('#validateNote-cpassword').show();
	}
});