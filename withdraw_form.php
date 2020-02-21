<head>
<style type="text/css">
#withdrawForm {
  
    border: 2px solid #747579;
    margin-top: 3px;
    border-radius: 8px;
}
#withdrawHeading {
    width: 111px;
    margin: auto;
    color: var(--info);
    font-weight: bold;
    font-family: monospace;
    font-size: smaller;
}
#withdrawInfo {
    padding-left: 36px;
    font-family: cursive;
    font-size: smaller;
}
label,input,select{
	font-family: monospace;
}
label{
	padding-left:8px;
}
.withdraw{
	width:100%;
	
}
</style>


</head>
<div class="container">
  <div class="row">
    <div class="col-sm">
     <!--- One of three columns ---->
    </div>
    <div class="col-sm">
	



<div class="signup-form" id="withdrawForm">
 <form  method="post" id="withdraw_form">
<div class="form-header">
<div id="withdrawHeading">Withdraw Money</div>
<div id="withdrawInfo">Fill out this form to Withdraw!</div>
</div>
 


<div class="form-group">
    <label class="control-label">Payment Method</label><div id="payment_error"></div>
    <div class="inputGroupContainer">
     <div class="input-group">
      <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
       <select class="selectpicker form-control" name="wpp" id="wpp">
       <option>Select Payment Method </option>
            <option value="bkash">Bkash</option>
			<option value="rocket">Rocket</option>
			<option value="payoner">Payoner</option>
			<option value="bitcoin">Bitcoin</option>
       </select>
       </div>
       </div></div>


<div class="form-group">
  <label class="control-label">Phone Number/Email</label>
   <div class="inputGroupContainer">
   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="wphoneNumber" placeholder="Phone Number" class="form-control" required="true" value="" type="text"></div>
   </div>
    </div>
	
	<div class="form-group">
  <label class="control-label">Amount</label><div id="amount_error"> </div>
   <div class="inputGroupContainer">
   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="amount" name="amount" type="number"placeholder="Amount" class="form-control" required="true" value="" type="text"></div>
   </div>
    </div>
	<div class="form-group">
  <label class="control-label">Current Password</label>
   <div class="inputGroupContainer">
   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="password" name="pas" placeholder="Password" class="form-control" required="true" value="" type="password"></div>
   </div>
    </div>
	<div align="center">
	<div class="form-group" align="center" >
    <div class="inputGroupContainer" align="center">
     <div class=" input-group" align="center"><span class="input-group-addon"></span><button type="submit" class="btn btn-primary withdraw" name="withdraw" id="withdraw">Withdraw</button>
     </div>
    </div></div></div>
	
	</form>
	</div>
	
	
	
                         
     </div> 
    <div class="col-sm">
    <!---  One of three columns --->
    </div>
  </div>
</div>                 


<script type="text/javascript">
    $('#amount').keyup(function(){
     var amount= $(this).val();
	// alert(amount);
	 if ($.isNumeric(amount)){ 
	 $('#amount_error').text("");
	 }
	 else {
		 $('#amount_error').html('<span style="color:red">Please Enter A Number</span>');
	 }
 

   });
   
   
    $('#wpp').change(function(){
     var method = $(this).val();
	// alert(amount);
	 if ((method=="bkash")||(method=="rocket")){ 
	 
	 $('#phoneNumber').attr("type","number");
	 
	 }
	 else {
		 $('#phoneNumber').attr("type","text");
		 $('#payment_error').html('<small><span style="color:orange">Please enter an email address</span></small>');
	 }
 

   });
   
   //submit withdraw form 
       $('#withdraw').click(function(){
		
				$.ajax({
		url: "withdraw.php",
		type: "POST",
		data: $("#withdraw_form").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
   	
    
	
	location.reload();
   });
  
   
  

</script>       


