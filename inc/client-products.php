<?php  
	global $FETCHINFO;
	$clientProducts = $FETCHINFO::getClientProducts($_SESSION['clientInfo']);

	$view = "";
  	if(isset($_REQUEST['view'])) :
    $view = $_REQUEST['view'];
  	endif;
?>

<center>



<?php if ($view == "additem") { ?>

<!-- ADD ITEM CONTENTS HERE -->
ADD ITEM CONTENTS HERE<br>
ADD ITEM CONTENTS HERE<br>
ADD ITEM CONTENTS HERE<br>
ADD ITEM CONTENTS HERE<br>
ADD ITEM CONTENTS HERE<br>
ADD ITEM CONTENTS HERE<br>
<!-- ADD ITEM CONTENTS HERE -->
<?php }else { ?>
	<h1 class="heading">PRODUCTS</h1>
	<a href="?content=products&view=additem"><button class="addbtn"><i class="fas fa-plus-circle"></i> Add Item </button></a>
	<br>
	<br>

		<div class="btn-option">
			<a href="?content=products&view=grid"><button class="btnop"><i class="fas fa-th-large"></i> GRID </button></a>
			<a href="?content=products&view=list"><button class="btnop"><i class="fas fa-list"></i> LIST </button></a>
		</div> 

	<br>

<?php if ($view == "list"){ ?>
	<table>
		  <tr>
		    <th>Product</th>
		    <th>Name</th>
		    <th>Price</th>
		    <th>Manage</th>
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
						    	<button class="edit" id="list-edit-<?php echo $value['ProductID'] ?>">EDIT</button>
						    </td>		    
					  	</tr>
		  			<?php
		  		}
		   ?>
		</table>
<?php }else { ?>
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
				    <button class='btn edtbtn' id="grid-edit-<?php echo $value['ProductID'] ?>">
				    <i class="fas fa-edit"></i></span>&nbsp Edit</button>
				    <button class='btn dltbtn' id="grid-delete-<?php echo $value['ProductID'] ?>">
				    <i class="far fa-trash-alt"></i></span>&nbspDelete</button>
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
