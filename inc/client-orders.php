<?php 
	$manage = "";
 	if(isset($_REQUEST['manage'])) :
    $manage = $_REQUEST['manage'];
  	endif;
 ?>
<center>
	<div class="cont">
		<a href="?content=orders&manage=pending" class="processstyle">PENDING</a>-----
		<a href="?content=orders&manage=processing" class="processstyle">PROCESSING</a>----- 
		<a href="?content=orders&manage=shipping" class="processstyle">SHIPPING</a>-----
		<a href="?content=orders&manage=delivered" class="processstyle">DELIVERED</a>-----
		<a href="?content=orders&manage=list" class="processstyle">LIST OF ORDERS</a>
	</div>
<?php if ($manage == "pending") { ?>
	<table>
		  <tr class="trsize">
		    <th>Product</th>
		    <th>Name</th>
		    <th>Quantity</th>
		    <th>Price</th>
		    <th>Manage</th>
		  </tr>
		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="edit">PROCESS</button><br>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="edit">PROCESS</button><br>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="edit">PROCESS</button><br>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>
	</table>

<?php }else if ($manage == "processing") { ?>
	<table>
		  <tr class="trsize">
		    <th>Product</th>
		    <th>Name</th>
		    <th>Quantity</th>
		    <th>Price</th>
		    <th>Manage</th>
		  </tr>
		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="edit">DELIVER</button><br>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="edit">DELIVER</button><br>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="edit">DELIVER</button><br>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>
	</table>

<?php }else if ($manage == "shipping") { ?>

	<table>
		  <tr class="trsize">
		    <th>Product</th>
		    <th>Name</th>
		    <th>Quantity</th>
		    <th>Price</th>
		    <th>Manage</th>
		  </tr>
		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="edit">DONE</button><br>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="edit">DONE</button><br>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="edit">DONE</button><br>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>
		</table>

<?php }else if ($manage == "delivered") { ?>

	<table>
		  <tr class="trsize">
		    <th>Product</th>
		    <th>Name</th>
		    <th>Quantity</th>
		    <th>Price</th>
		    <th>Manage</th>
		  </tr>
		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="delete">CANCEL</button>

		    </td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="delete">CANCEL</button>
		    </td>		    
		  </tr>
		</table>

<?php }else if ($manage == "list") { ?>

	<table>
		  <tr class="trsize">
		    <th>Product</th>
		    <th>Name</th>
		    <th>Quantity</th>
		    <th>Price</th>
		    <th>Status</th>
		  </tr>
		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>Processing</td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>Shipping</td>		    
		  </tr>

		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>2</td>
		    <td>&#8369 10,000</td>
		    <td>Pending</td>		    
		  </tr>
		</table>
<?php } ?>
</center>