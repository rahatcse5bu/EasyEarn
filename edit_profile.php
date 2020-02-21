<html>
<head>

<script type="text/javascript">
$(document).ready(function (){
	//hiding "Get Reward" Button
	$("#update").click(function(){
		
		$.ajax()
		
		
	});
	
</script>

<style type="text/css">
.frm {
    border: 1px solid #b6c2cefc;
    border-radius: 8px;
    margin-top: 3px;
    margin-bottom: 3px;
}
#frmHeading {
    padding-left: 20px;
    font-family: monospace;
    font-weight: bold;
    font-size: 20px;
  
}
#inf{
	color: teal;
	padding-left: 10px;
}
</style>
	
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <!--- One of three columns !--->
    </div>
    <div class="col-sm frm">
 
  
<div class="signup-form">
    <form action="" method="post">
		<div class=" form-header">
			<div id="frmHeading">Profile Details</div>
			<p id="inf">Change Informations Where You Need!</p>
		</div>
        <div class="form-group">
			<label>Username</label>
        	<input type="text" class="form-control" name="username" required="required" value="<?php include"database.php";echo $u; ?>" disabled >
        </div>
        <div class="form-group">
			<label>Email Address</label>
        	<input type="email" class="form-control" name="email" id="email" required="required" value="<?php include"database.php";echo $email; ?>">
        </div>
		<div class="form-group">
			<label>Old Password</label>
            <input type="password" class="form-control" name="password-old" required="required" autocomplete="off" placeholder="Password here">
        </div>
		<div class="form-group">
			<label> New Password</label>
            <input type="password" class="form-control" name="password1" id="pass1"  placeholder="Leave Blank If You Don't Want To Change">
        </div>
		<div class="form-group">
			<label>Confirm New Password</label>
            <input type="password" class="form-control" name="confirm_password2" id="pass2"  placeholder="Leave Blank If You Don't Want To Change">
        </div>        
        
		<div class="form-group" align="center">
			<button type="submit" class="btn btn-primary " id="update"name="submit">Update</button>
		</div>	
    </form>
	
</div>

</div>

  <div class="col-sm">
      <!--- One of three columns !--->
    </div>
  </div>
</div>


<!---- Content Protect 

<body oncontextmenu="return false;"  onkeydown="return false;" onmousedown="return false; ></body>

 ---->

</body>


</html>
<script type="text/javascript">
$(document).ready(function (){
	$("#").keyup(function(){
		
		
		
		
	});
	
	
	$('#update').click(function(){
		
		
		
	});
	
});



</script>

<?php

session_start();
?>