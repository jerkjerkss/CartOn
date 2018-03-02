<?php 

class FetchInfo extends CARTON
{
	
	function getCategoryArray(){
		return parent::select('*', 'productcategories', '1', 'config.ini');
	}	

	function getProductArray(){
		return parent::select('*', 'products', '1', 'config.ini');
	}
}



?>