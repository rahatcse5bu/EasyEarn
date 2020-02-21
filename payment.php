<html><body>

<head>
<style type="text/css">
.paymentForm {
    border: 3px solid #bfb9b9;
    border-radius: 9px;
    margin-top: 3px;
    margin-bottom: 3px;
    width: 100%;
 
    background-color: green;
}
#paymentDetails {
    padding-left: 30px;
    color: #1b010e;
    font-weight: bold;
    padding-right: 35px;
    padding-bottom: 20px;
    font-family: initial;
}
#frmInfo {
    color: green;
    font-family: sans-serif;
    padding-left: 6px;
}
.paymentForm{
	
	background-color:white;
}
#txt,input,select {
    padding-left: 9px;
    font-family: monospace;
}
</style>

</head>

<div class="container">
  <div class="row">
    <div class="col">
     <!--- One of three columns --->
    </div>

 <div class="col">
<div class="signup-form paymentForm" >
    <form action="" method="post">
		<div class="form-header">
			<div id="paymentDetails"> Change Payment Details</div>
			<div id="frmInfo"> Change Information Where You Need!</div>
		</div>
		
		  <div class="form-group">
           <label class=" control-label" id="txt">Payment Method</label>
            <div class=" inputGroupContainer">
             <div class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
             <select class="selectpicker form-control" name="p">
            <option>Select Payment Method</option>
            <option value="bkash">Bkash</option>
			<option value="rocket">Rocket</option>
			<option value="payoner">Payoner</option>
			<option value="bitcoin">Bitcoin</option>
             </select>
             </div>
             </div></div>
		
		
        <div class="form-group">
			<label id="txt">Payment Email/Phone Number</label>
        	<input type="text" class="form-control" name="PP" required="required" value="<?php include "database.php";echo $u; ?>"  >
        </div>
       
		
		<div class="form-group">
			<label id="txt">Your Current Password</label>
            <input type="password" class="form-control" name="pass" required="required" autocomplete="off" >
        </div>        
        
		<div class="form-group" align="center" >
			<button type="submit" class="btn btn-primary " name="payment">Update</button>
		</div>	
    </form>
	
</div>

</div>








    <div class="col">
    <!---  One of three columns --->
    </div>
  </div>
</div>



































</body></html>