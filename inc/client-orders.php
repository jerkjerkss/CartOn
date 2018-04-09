<?php 

	global $FETCHINFO;
	$customerOrders = $FETCHINFO::getCustomerOrders($_SESSION['clientInfo']);

	$manage = "";
 	if(isset($_REQUEST['manage'])) :
    $manage = $_REQUEST['manage'];
  	endif;

  	$view = "";
 	if(isset($_REQUEST['view'])) :
    $view = $_REQUEST['view'];
  	endif;
 ?>
<center>
	<div class="cont">
		<a href="?content=orders&manage=pending"><img class="img_pr" src="images/pr1.png"></a>
		<a href="?content=orders&manage=processing"><img class="img_pr" src="images/pr2.png"></a>
		<a href="?content=orders&manage=shipping" ><img class="img_pr" src="images/pr3.png"></a>
		<a href="?content=orders&manage=delivered"><img class="img_pr" src="images/pr4.png"></a>
		<a href="?content=orders&manage=list"><img class="img_pr" src="images/pr5.png"></a>
	</div>	

<?php if ($manage == "pending") { 
	?>
		<div class="btn-group">
		  <a href="?content=orders&manage=pending&view=grid"><button class="btnop">
				<i class="fa fa-th-large"></i></button></a></button>
		  <a href="?content=orders&manage=pending&view=list"><button class="btnop">
				<i class="fa fa-list"></i></button></a></button>
		</div>
	<?php

	if ($view == "list") { ?>
	<table>
		  <tr class="trsize">
		    <th>Thumbnail</th>
		    <th>Product ID</th>
		    <th>Order ID</th>
		    <th>User ID</th>
		    <th>Quantity</th>
		    <th>Manage</th>
		  </tr>
		  <?php 
		  	foreach ($customerOrders as $key => $value) {
		  		if ($value['OrderStatus'] == "Pending") {
		  		?>
					<tr>
					    <td><img src="uploads/products/<?php echo $value['ProductThumb'] ?>" class="thumb"></td>
					    <td><?php echo $value['ProductID'] ?></td>
					    <td><?php echo $value['OrderID'] ?></td>
					    <td><?php echo $value['UserID'] ?></td>
					    <td><?php echo $value['OrderAmount']; ?></td>
					    <td>
					    	<button class="edit">PROCESS</button><br>
					    	<button class="delete">CANCEL</button>

					    </td>		    
				  	</tr>
		  		<?php
		  		}
		  	}
		   ?>
		  

	</table>

<?php }else { ?>
<div class="col-md-12 col-sm-12" style="padding-bottom: 113px;padding-right: 0px;padding-left: 50px;">  
	<div class="row">
	    <ul class="producthandler"> 
	    	<?php 
	    		foreach ($customerOrders as $key => $value) {
	    			if ($value['OrderStatus'] == "Pending") {
	    				# code...
	    	 ?>
				<li class='product '>
				    <img src='uploads/products/<?php echo $value['ProductThumb'] ?>' class='productimage'>
				    <p class='itmname' align='center'><?php echo $value['ProductName'] ?></p>
				    <strong align='center'><?php echo $value['ProductPrice'] ?></strong><br>
				    <a href=><button class='btn edtbtn' id="grid-edit">
				    <i class="fa fa-spinner"></i></span> Process</button></a>
				    <button class='btn dltbtn' id="grid-delete">
				    <i class="fa fa-ban"></i></span> Cancel</button>
				    	<br>&nbsp
				</li>
    		<?php }} ?>
		</ul>
  </div>
</div>

<?php } }else if ($manage == "processing") { 
	?>
		<div class="btn-group">
		  <a href="?content=orders&manage=processing&view=grid"><button class="btnop">
				<i class="fa fa-th-large"></i></button></a></button>
		  <a href="?content=orders&manage=processing&view=list"><button class="btnop">
				<i class="fa fa-list"></i></button></a></button>
		</div>
	<?php

	if ($view == "list") { ?>
	<table>
		  <tr class="trsize">
		    <th>Thumbnail</th>
		    <th>Product ID</th>
		    <th>Order ID</th>
		    <th>User ID</th>
		    <th>Quantity</th>
		    <th>Manage</th>
		  </tr>
		  <?php 
		  	foreach ($customerOrders as $key => $value) {
		  		if ($value['OrderStatus'] == "Processing") {
		  		?>
					<tr>
					    <td><img src="uploads/products/<?php echo $value['ProductThumb'] ?>" class="thumb"></td>
					    <td><?php echo $value['ProductID'] ?></td>
					    <td><?php echo $value['OrderID'] ?></td>
					    <td><?php echo $value['UserID'] ?></td>
					    <td><?php echo $value['OrderAmount']; ?></td>
					    <td>
					    	<button class="edit">PROCESS</button><br>
					    	<button class="delete">CANCEL</button>

					    </td>		    
				  	</tr>
		  		<?php
		  		}
		  	}
		   ?>
		 
	</table>
<?php }else { ?>
<div class="col-md-12 col-sm-12" style="padding-bottom: 113px;padding-right: 0px;padding-left: 50px;">  
	<div class="row">
	    <ul class="producthandler"> 
			<li class='product '>
			    <img src='uploads/products/Capture.png' class='productimage'>
			    <p class='itmname' align='center'></p>
			    <strong align='center'></strong><br>
			    <a href=><button class='btn edtbtn' id="grid-edit">
			    <i class="fa fa-truck"></i></span> Deliver</button></a>
			    <button class='btn dltbtn' id="grid-delete">
			    <i class="fa fa-ban"></i></span> Cancel</button>
			    	<br>&nbsp
			</li>
		</ul>
  </div>
</div>

<?php } }else if ($manage == "shipping") { 
	?>
		<div class="btn-group">
		  <a href="?content=orders&manage=shipping&view=grid"><button class="btnop">
				<i class="fa fa-th-large"></i></button></a></button>
		  <a href="?content=orders&manage=shipping&view=list"><button class="btnop">
				<i class="fa fa-list"></i></button></a></button>
		</div>
	<?php

	if ($view == "list") { ?>

	<table>
	  <tr class="trsize">
	   	<th>Thumbnail</th>
		    <th>Product ID</th>
		    <th>Order ID</th>
		    <th>User ID</th>
		    <th>Quantity</th>
	    <th>Manage</th>
	  </tr>
	  	<?php 
		  	foreach ($customerOrders as $key => $value) {
		  		if ($value['OrderStatus'] == "Shipping") {
		  		?>
					<tr>
					    <td><img src="uploads/products/<?php echo $value['ProductThumb'] ?>" class="thumb"></td>
					    <td><?php echo $value['ProductID'] ?></td>
					    <td><?php echo $value['OrderID'] ?></td>
					    <td><?php echo $value['UserID'] ?></td>
					    <td><?php echo $value['OrderAmount']; ?></td>
					    <td>
					    	<button class="edit">PROCESS</button><br>
					    	<button class="delete">CANCEL</button>

					    </td>		    
				  	</tr>
		  		<?php
		  		}
		  	}
		   ?>
	</table>
<?php }else { ?>
<div class="col-md-12 col-sm-12" style="padding-bottom: 113px;padding-right: 0px;padding-left: 50px;">  
	<div class="row">
	    <ul class="producthandler"> 
			<li class='product '>
			    <img src='uploads/products/Capture.png' class='productimage'>
			    <p class='itmname' align='center'></p>
			    <strong align='center'></strong><br>
			    <a href=><button class='btn edtbtn' id="grid-edit">
			    <i class="fa fa-check"></i></span> Done</button></a>
			    <button class='btn dltbtn' id="grid-delete">
			    <i class="fa fa-ban"></i></span> Cancel</button>
			    	<br>&nbsp
			</li>
		</ul>
  </div>
</div>
<?php } }else if ($manage == "delivered") { 
	?>
		<div class="btn-group">
		  <a href="?content=orders&manage=delivered&view=grid"><button class="btnop">
				<i class="fa fa-th-large"></i></button></a></button>
		  <a href="?content=orders&manage=delivered&view=list"><button class="btnop">
				<i class="fa fa-list"></i></button></a></button>
		</div>
	<?php

	if ($view == "list") { ?>

	<table>
		  <tr class="trsize">
		    <th>Thumbnail</th>
		    <th>Product ID</th>
		    <th>Order ID</th>
		    <th>User ID</th>
		    <th>Quantity</th>
		    <th>Manage</th>
		  </tr>
		  <?php 
		  	foreach ($customerOrders as $key => $value) {
		  		if ($value['OrderStatus'] == "Delivered") {
		  		?>
					<tr>
					    <td><img src="uploads/products/<?php echo $value['ProductThumb'] ?>" class="thumb"></td>
					    <td><?php echo $value['ProductID'] ?></td>
					    <td><?php echo $value['OrderID'] ?></td>
					    <td><?php echo $value['UserID'] ?></td>
					    <td><?php echo $value['OrderAmount']; ?></td>
					    <td>
					    	<button class="edit">PROCESS</button><br>
					    	<button class="delete">CANCEL</button>

					    </td>		    
				  	</tr>
		  		<?php
		  		}
		  	}
		   ?>

		 
		</table>
<?php }else { ?>
<div class="col-md-12 col-sm-12" style="padding-bottom: 113px;padding-right: 0px;padding-left: 50px;">  
	<div class="row">
	    <ul class="producthandler"> 
			<li class='product '>
			    <img src='uploads/products/TEST2.png' class='productimage'>
			    <p class='itmname' align='center'></p>
			    <strong align='center'></strong><br>
			    <button class='btn dltbtn' id="grid-delete">
			    <i class="fa fa-ban"></i></span> Cancel</button>
			    	<br>&nbsp
			</li>
		</ul>
  </div>
</div>
<?php } }else if ($manage == "list") { 
	?>
		<div class="btn-group">
		  <a href="?content=orders&manage=list&view=grid"><button class="btnop">
				<i class="fa fa-th-large"></i></button></a></button>
		  <a href="?content=orders&manage=list&view=list"><button class="btnop">
				<i class="fa fa-list"></i></button></a></button>
		</div>
	<?php

	if ($view == "list") { ?>

	<table>
		  <tr class="trsize">
		    <th>Thumbnail</th>
		    <th>Product ID</th>
		    <th>Order ID</th>
		    <th>User ID</th>
		    <th>Quantity</th>
		    <th>Status</th>
		  </tr>
		  <?php 
		  	foreach ($customerOrders as $key => $value) {
		  		if ($value['OrderStatus'] != "Remove" && $value['OrderStatus'] != "Cart") {
	  		?>
				<tr>
				    <td><img src="uploads/products/<?php echo $value['ProductThumb'] ?>" class="thumb"></td>
				    <td><?php echo $value['ProductID'] ?></td>
					    <td><?php echo $value['OrderID'] ?></td>
					    <td><?php echo $value['UserID'] ?></td>
					    <td><?php echo $value['OrderAmount']; ?></td>
				    <td><?php echo $value['OrderStatus'] ?></td>		    
			  	</tr>
	  		<?php
		  		}
		  	}
		   ?>

		</table>

<?php }else { ?>

		<div class="col-md-12 col-sm-12" style="padding-bottom: 113px;padding-right: 0px;padding-left: 50px;">  
	<div class="row">
	    <ul class="producthandler"> 
			<li class='product '>
			    <img src='uploads/products/' class='productimage'>
			    <p class='itmname' align='center'></p>
			    <strong align='center'></strong><br>
			    <h4 class="pstate">PROCESSING</h4>
			</li>
		</ul>
  </div>
</div>
<?php }} ?>


</center>