<?php  
	global $FETCHINFO;
	$clientProducts = $FETCHINFO::getClientProducts($_SESSION['clientInfo']);

	$view = "";
  	if(isset($_REQUEST['view'])) :
    $view = $_REQUEST['view'];
  	endif;

  	$edit = "";
  	if(isset($_REQUEST['edit'])) :
    $edit = $_REQUEST['edit'];
  	endif;
?>

<center>



<?php if ($view == "additem") { ?>

	<!-- ADD ITEM CONTENTS -->
		<h1 class="heading">ADD PRODUCT</h1>
		<form>
			  <input type="text" id="pname"  placeholder="Product Name">
			  <br>
			  <textarea id="pdes" placeholder="Product Description.." style="height:100px; width: 50%"></textarea>
			  <br>
			  <input type="text" id="pprice"  placeholder="Product Price">
			  <br>
			  <button class="addbtn"><i class="fa fa-plus-circle"></i> Add Product </button>
		</form>

	<!-- ADD ITEM CONTENTS -->
<?php }else if($view == "edit"){
	?>
		<!-- breadcrumbs -->
			<div class="breadcrumb_dress">
				<div class="container">
					<ul>
						<li><a href="?client-home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
						<li><a href="?content=products"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Products</a> <i>/</i></li>
						<li>Edit Products</li>
					</ul>
				</div>
			</div>
			<h1 class="heading">Edit PRODUCT</h1>
		<form>
			<img class="product_img" src="uploads/products/Capture.PNG"><br>
			<button class="change_photo"> Upload Photo </button><br>

				<div class="dropdown">
				  <button class="dropbtn">Change Category</button>
					  <div class="dropdown-content">
						<a href="">Apparel</a>
						<a href="">Footwear</a>
						<a href="">Electronics</a>
						<a href="">Accessories</a>
						<a href="">Footwear</a>
					  </div>
			 	</div><br>
			  <input type="text" id="pname"  placeholder="Product Name">
			  <br>
			  <textarea id="pdes" placeholder="Product Long Description.." style="height:100px; width: 50%"></textarea> <br>
			  <textarea id="pdes" placeholder="Product Short Description.." style="height:65px; width: 25%"></textarea>
			  <textarea id="pdes" placeholder="Product Cart Description.." style="height:65px; width: 25%"></textarea> <br>
			  <input type="text" id="pprice"  placeholder="Product Price"><br>
			  <input type="text" id="pweight"  placeholder="Product Weight"><br>
			  <input type="text" id="ploc"  placeholder="Product Location"><br>
			  <input type="text" id="pstock"  placeholder="Product Stock"><br>

			  <button class="addbtn"><i class="fa fa-check"></i> SAVE EDIT </button>
		</form>
		<!-- //breadcrumbs -->
	<?php
}else { ?>
	<h1 class="heading">PRODUCTS</h1>
	<a href="?content=products&view=additem"><button class="addbtn"><i class="fa fa-plus-circle"></i> Add Item </button></a>
	<br>
	<br>

	<div class="btn-group">
	  <a href="?content=products&view=grid"><button class="btnop">
			<i class="fa fa-th-large"></i></button></a></button>
	  <a href="?content=products&view=list"><button class="btnop">
			<i class="fa fa-list"></i></button></a></button>
	</div>

	<br>

<?php if ($view == "list"){ ?>
	<table>
		  <tr>
		    <th>PRODUCT</th>
		    <th>NAME</th>
		    <th>PRICE</th>
		    <th>MANAGE</th>
		  </tr>

		  <?php 
		  		foreach ($clientProducts as $key => $value) {
		  			?>
		  				<tr>
						    <td><img src="uploads/products/<?php echo $value['ProductThumb'] ?>" class="thumb"></td>
						    <td><?php echo $value['ProductName'] ?></td>
						    <td>&#8369 <?php echo $value['ProductPrice'] ?></td>
						    <td>
						    	<button class="delete" id="list-delete-<?php echo $value['ProductID'] ?>">DELETE</button><br>
						    	<a href="?content=products&view=edit&edit=<?php echo $value['ProductID'] ?>"><button class="edit" id="list-edit-<?php echo $value['ProductID'] ?>">EDIT</button></a>
						    </td>		    
					  	</tr>
		  			<?php
		  		}
		   ?>
		</table>

<?php }else if ($view == "edit") {
	?>
		<center>
			<h1>Test</h1>
		</center>

	<?php
}else { ?>
<div class="col-md-12 col-sm-12" style="padding-bottom: 113px;padding-right: 0px;padding-left: 50px;">  
	<div class="row">
	        <ul class="producthandler"> 
	<?php 
		foreach ($clientProducts as $key => $value) {
  			?>
				<li class='product '>
				    <img src='uploads/products/<?php echo $value['ProductThumb'] ?>' class='productimage'>
				    <p class='itmname' align='center'><?php echo $value['ProductName'] ?></p>
				    <strong align='center'>PHP <?php echo $value['ProductPrice'] ?></strong><br>
				    <a href="?content=products&view=edit&edit=<?php echo $value['ProductID'] ?>"><button class='btn edtbtn' id="grid-edit-<?php echo $value['ProductID'] ?>">
				    <i class="fa fa-edit"></i></span>&nbsp Edit</button></a>
				    <button class='btn dltbtn' id="grid-delete-<?php echo $value['ProductID'] ?>">
				    <i class="fa fa-trash"></i></span>&nbsp Delete</button>
				    	<br>&nbsp
				</li>
  			<?php
  		}
	 ?>
	        </ul>
		  </div>
	</div>
<?php }} ?>

</center>
