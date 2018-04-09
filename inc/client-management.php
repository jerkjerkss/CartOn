<style type="text/css">\
.panel {
    border: 1px solid red; 
    border-radius:0;
    transition: box-shadow 0.5s;
}
#panel {
	border: 1px solid #00b2a3;
}
.panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
}
.panel-footer .btn:hover {
    border: 1px solid #008f83;
    background-color: #008f83 !important;
    color: white;
}
.panel-heading {
    color: #fff !important;
    background-color: #00b2a3 !important;
    padding: 15px;
    border-bottom: 1px solid transparent;
}
.panel-footer {
    background-color: #fff !important;
}

.panel-footer h3 {
    font-size: 32px;
}

.panel-footer h4 {
    color: #aaa;
    font-size: 14px;
}
.panel-footer .btn {
	margin: 15px 0;
	background-color: #00b2a3;
	color: white;
}
.table {
	border:1px solid #00b2a3;
}
th {
	background-color: #00b2a3;
}
 #tr1 td, #tr2 td, #tr3 td {
	color: black;
}
#img {
	width: 32px;
	height: 32px;
	border:1px solid #008f83;
	margin-left: 10px;
}
td {
	border:1px solid #008f83;
}
input {
	margin-left: -16px;
}
</style>
<div class="container">
  <div class="text-center"><br><br>
  </div>
  <div class="row">
  	<div class="col-md-12">
    <h2 class="text-center">Workers Management</h2> <br>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th style="color:  white;">Picture</th>
        <th style="color:  white;">Worker's Name</th>
        <th style="color:  white;">Worker's Email</th>
        <th style="color:  white;">Number of Products</th>
        <th style="color:  white;">Reputation</th>

      </tr>
    </thead>
    <tbody>
      <tr id="tr1">
        <td><img id="img" src="images/14.jpg"></td>
        <td>Erwin Hayag</td>
        <td>erwin@boompanes.com</td>
        <td>15 products</td>
        <td>Wala</td>
      </tr>
      <tr id="tr2">
        <td><img id="img" src="images/14.jpg"></td>
        <td>Jericho Gonzales</td>
        <td>youre@road.com</td>
        <td>12 products</td>
        <td>Wala din</td>
      </tr>
      <tr id="tr3">
        <td><img id="img" src="images/14.jpg"></td>
        <td>Cedrick Paulme</td>
        <td>Dahilsayo@akoylalaban.com</td>
        <td>12 products</td>
        <td>Wala din</td>
      </tr>
    </tbody>
  </table>
</div>
    <div class="col-md-4">
      <div id="panel" class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Organzation Information</h4>
        </div>
        <div class="panel-body">
          <p class="pull-left"><strong> Name of Organization: </strong> Suicide Squad Inc.</p><br><br>
          <p class="pull-left"><strong>Permits: </strong></p><br>
          <p class="pull-left">• DTI Certificate</p><br>
          <p class="pull-left">• BIR Certificate</p><br>
          <p class="pull-left">• Businness Permit</p><br><br>
        </div>
      </div> 
    </div> 
    <div class="col-md-4">
      <div id="panel" class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Add Workers</h4>
        </div>
        <div class="panel-body">
        	<form>
			    <div class="form-group">
			      <label>Worker's Name:</label><br>
			      <input type="text" class="form-control">
			    </div>
			  </form>
        </div>
        <div class="panel-footer">
          <button class="btn btn-md" style="padding: 4px 60px;">Confirm</button>
        </div>
      </div> 
    </div>
    <div class="col-md-4">
      <div id="panel" class="panel panel-default text-center">
        <div class="panel-heading">
          <h4>Verification</h4>
        </div>
        <div class="panel-body">
         <br><br><h4>Wag daw</h4><br><br><br><br>
      </div> 
    </div>	