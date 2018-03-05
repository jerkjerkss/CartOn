<?php 

class FetchInfo extends CARTON
{
	
	function getCategoryArray(){
		return parent::select('*', 'productcategories', '1', 'config.ini');
	}	

	function getProductArray(){
		return parent::select('*', 'products', '1 ORDER BY `products`.`ProductUpdateDate` DESC', 'config.ini');
	}

	function getProductByCategory($categoryID){
		return parent::select('*', 'products', '`CategoryID` = $categoryID ORDER BY `ProductUpdateDate` DESC', 'config.ini');
	}
}



?>