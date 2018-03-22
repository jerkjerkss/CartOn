<?php  
	$view = "";
  	if(isset($_REQUEST['view'])) :
    $view = $_REQUEST['view'];
  	endif;
?>

<center>
		<h1 class="heading">PRODUCTS</h1>


	<button class="addbtn">
		<i class="fas fa-plus-circle"></i> Add Item
	</button>

<br>
<br>

	<div class="btn-option">
		<a href="?content=products&view=grid"><button class="btnop"><i class="fas fa-th-large"></i>GRID</button></a>
		<a href="?content=products&view=list"><button class="btnop"><i class="fas fa-list"></i>LIST</button></a>
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
		  <tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="delete">DELETE</button><br>
		    	<button class="edit">EDIT</button>
		    </td>		    
		  </tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="delete">DELETE</button><br>
		    	<button class="edit">EDIT</button>
		    </td>		    
		  </tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="delete">DELETE</button><br>
		    	<button class="edit">EDIT</button>
		    </td>		    
		  </tr>
		    <td><img src="/CartOn/uploads/products/Capture.PNG" class="thumb"></td>
		    <td>Asus Maryosep</td>
		    <td>&#8369 10,000</td>
		    <td>
		    	<button class="delete">DELETE</button><br>
		    	<button class="edit">EDIT</button>
		    </td>		    
		  </tr>	
		</table>
<?php }else { ?>
<div class="col-md-12 col-sm-12" style="padding-bottom: 113px;padding-right: 0px;padding-left: 50px;">  
		<div class="row">
	        <ul class="producthandler">                             
	                
				<li class='product '>
				    <img src='/CartOn/uploads/products/Capture.PNG' class='productimage'>
				    <p class='itmname' align='center'>Asus Maryosep</p>
				    <strong align='center'>PHP 10,000.00</strong><br>
				    <button class='btn edtbtn'>
				    <i class="fas fa-edit"></i></span>&nbsp Edit</button>
				    <button class='btn dltbtn'>
				    <i class="far fa-trash-alt"></i></span>&nbspDelete</button>
				    	<br>&nbsp
				</li>
				<li class='product '>
				    <img src='/CartOn/uploads/products/Capture.PNG' class='productimage'>
				    <p class='itmname' align='center'>Asus Maryosep</p>
				    <strong align='center'>PHP 10,000.00</strong><br>
				    <button class='btn edtbtn'>
				    <i class="fas fa-edit"></i></span>&nbsp Edit</button>
				    <button class='btn dltbtn'>
				    <i class="far fa-trash-alt"></i></span>&nbspDelete</button>
				    	<br>&nbsp
				</li>
				<li class='product '>
				    <img src='/CartOn/uploads/products/Capture.PNG' class='productimage'>
				    <p class='itmname' align='center'>Asus Maryosep</p>
				    <strong align='center'>PHP 10,000.00</strong><br>
				    <button class='btn edtbtn'>
				    <i class="fas fa-edit"></i></span>&nbsp Edit</button>
				    <button class='btn dltbtn'>
				    <i class="far fa-trash-alt"></i></span>&nbspDelete</button>
				    	<br>&nbsp
				</li>
				<li class='product '>
				    <img src='/CartOn/uploads/products/Capture.PNG' class='productimage'>
				    <p class='itmname' align='center'>Asus Maryosep</p>
				    <strong align='center'>PHP 10,000.00</strong><br>
				    <button class='btn edtbtn'>
				    <i class="fas fa-edit"></i></span>&nbsp Edit</button>
				    <button class='btn dltbtn'>
				    <i class="far fa-trash-alt"></i></span>&nbspDelete</button>
				    	<br>&nbsp
				</li>



	        </ul>
	    </div>
	</div>
<?php } ?>

</center>
