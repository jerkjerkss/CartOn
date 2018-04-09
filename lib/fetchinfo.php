<?php 

class FetchInfo extends CARTON
{
	
	function getCategoryArray(){
		return parent::select('*', 'productcategories', '1', 'config.ini');
	}
	function getSubCategoryArray(){
		return parent::select('*', 'productsubcategories', '1', 'config.ini');
	}	

	function getProductArray(){
		return parent::select('*', 'products', '1 ORDER BY `products`.`ProductUpdateDate` DESC', 'config.ini');
	}

	function getProductByCategory($categoryID){
		return parent::select('*', 'products', '`CategoryID` = $categoryID ORDER BY `ProductUpdateDate` DESC', 'config.ini');
	}

	function getItems($UserID){
		return parent::select("SUM(`orders`.`OrderAmount`) as 'Items', SUM(`products`.`ProductPrice` * `orders`.`OrderAmount`) as 'Price'", "`orders` INNER JOIN `products`", "`orders`.`UserID` = '$UserID' AND `orders`.`ProductID` = `products`.`ProductID`", 'config.ini')[0];
	}

	function getOrders($UserID){
		return parent::select("*", "`orders` INNER JOIN `products`", "`UserID` = '$UserID' AND `products`.`ProductID` = `orders`.`ProductID` AND `orders`.`OrderStatus` = 'Cart'", 'config.ini');
	}

	function getClientProducts($clientInfo){
		$SellerGroupID = $clientInfo['SellerGroupID'];
		return parent::select("*", "products", "`SellerGroupID` = $SellerGroupID", 'config.ini');
	}

	function searchProducts($searchName){
		return parent::select('*', 'products', "`ProductName` LIKE '%$searchName%' ORDER BY `ProductUpdateDate` DESC", 'config.ini');
	}

	function getCustomerOrders($clientInfo){
		$SellerGroupID = $clientInfo['SellerGroupID'];
		return parent::select('*', '`orders` INNER JOIN `users` INNER JOIN `products`', "`orders`.`UserID` = `users`.`UserID` AND `orders`.`ProductID` = `products`.`ProductID` AND `products`.`SellerGroupID` = $SellerGroupID", 'config.ini');
	}


	
	

}


?>