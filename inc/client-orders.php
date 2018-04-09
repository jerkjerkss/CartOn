<?php 
	$manage = "";
 	if(isset($_REQUEST['manage'])) :
    $manage = $_REQUEST['manage'];
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

	<div class="btn-group">
	  <a href="?content=products&view=grid"><button class="btnop">
			<i class="fa fa-th-large"></i></button></a></button>
	  <a href="?content=products&view=list"><button class="btnop">
			<i class="fa fa-list"></i></button></a></button>
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

<div class="col-md-12 col-sm-12" style="padding-bottom: 113px;padding-right: 0px;padding-left: 50px;">  
	<div class="row">
	        <ul class="producthandler"> 
				<li class='product '>
				    <img src='uploads/products/' class='productimage'>
				    <p class='itmname' align='center'></p>
				    <strong align='center'></strong><br>
				    <a href=><button class='btn edtbtn' id="grid-edit">
				    <i class="fa fa-spinner"></i></span> Process</button></a>
				    <button class='btn dltbtn' id="grid-delete">
				    <i class="fa fa-ban"></i></span> Cancel</button>
				    	<br>&nbsp
				</li>
				<li class='product '>
				    <img src='uploads/products/' class='productimage'>
				    <p class='itmname' align='center'></p>
				    <strong align='center'></strong><br>
				    <a href=><button class='btn edtbtn' id="grid-edit">
				    <i class="fa fa-truck"></i></span> Deliver</button></a>
				    <button class='btn dltbtn' id="grid-delete">
				    <i class="fa fa-ban"></i></span> Cancel</button>
				    	<br>&nbsp
				</li>
				<li class='product '>
				    <img src='uploads/products/' class='productimage'>
				    <p class='itmname' align='center'></p>
				    <strong align='center'></strong><br>
				    <a href=><button class='btn edtbtn' id="grid-edit">
				    <i class="fa fa-check"></i></span> Done</button></a>
				    <button class='btn dltbtn' id="grid-delete">
				    <i class="fa fa-ban"></i></span> Cancel</button>
				    	<br>&nbsp
				</li>
				<li class='product '>
				    <img src='uploads/products/' class='productimage'>
				    <p class='itmname' align='center'></p>
				    <strong align='center'></strong><br>
				    <button class='btn dltbtn' id="grid-delete">
				    <i class="fa fa-ban"></i></span> Cancel</button>
				    	<br>&nbsp
				</li>
				<li class='product '>
				    <img src='uploads/products/' class='productimage'>
				    <p class='itmname' align='center'></p>
				    <strong align='center'></strong><br>
				    <h4 class="pstate">PROCESSING</h4>
				</li>
  			</ul>
		  </div>
	</div>
</center>