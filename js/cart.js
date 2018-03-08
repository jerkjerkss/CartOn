$('.item-add').click(function(){
	var data = new Object();
	data["request_type"] = "request-addcart";
	data["ProductID"] = $(this).attr('value');
	var price = $('#price-' + data['ProductID']).text();
	$.post("lib/ajax-request.php", {data: data}, function(callback){
		$('#cart-price').html(parseInt($('#cart-price').html(), 10)+parseInt(price));
		$('#cart-items').html(parseInt($('#cart-items').html(), 10)+1);
    });
});

$('.close').on('click', function(){
	var data = new Object();
	data["request_type"] = "request-removecart";
	data["OrderID"] = $(this).attr('value');
	$.post("lib/ajax-request.php", {data: data}, function(callback){
		console.log(callback);
    });

});

$('.value-minus').on('click', function(){
	var data = new Object();
	data["request_type"] = "request-subcart";
	data["ProductID"] = $(this).attr('value');
	var price = $('#table-price-' + data['ProductID']).text();
	$.post("lib/ajax-request.php", {data: data}, function(callback){
		if (callback != "Stop") {
			$('#checkout-total').html(parseInt($('#checkout-total').html(), 10)-parseInt(price));
		}
    });
});

$('.value-plus').on('click', function(){
	var data = new Object();
	data["request_type"] = "request-addcart";
	data["ProductID"] = $(this).attr('value');
	var price = $('#table-price-' + data['ProductID']).text();
	$.post("lib/ajax-request.php", {data: data}, function(callback){
		$('#checkout-total').html(parseInt($('#checkout-total').html(), 10)+parseInt(price));
		console.log(callback);
    });
});
