<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
 


<title>Earn Money Online || EasyEarn.Xyz</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="/b/SignUpModal.css"/>

<script src="https://kit.fontawesome.com/848cfc15aa.js" crossorigin="anonymous"></script>

<!--- Graph --->
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  google.charts.load('current', {packages: ['corechart']});
  google.charts.setOnLoadCallback(drawChart);
 
</script>

<style type="text/css">
*{margin:0px;padding:0px}
#dv {
    background-image: linear-gradient(#16ff16,white,grey);
    border-width: 2px;
    border-style: solid;
    margin-top: 5px;
    border-radius: 4px;
    margin-right: 2px;
    padding: 10px;
    border-style: solid;
    border-color: #2b2626;
    font-family: cursive;
    /* box-shadow: inset -14px 4px 0px 2px green; */
    text-shadow: 0px 0px black;
	transition: all 2s;
}
#div :hover{
 background-image: linear-gradient(white,yellow,green,blue);
    opacity:0.5;
    margin-top: 5px;
    border-radius: 4px;
    margin-right: 2px;
    padding: 10px;
    border-style: solid;
   
   	
	
}
#dv h3{
color: #009688;	
}
.footer {
    background-color: black;
    border: 2px solid lightslategrey;
    border-radius: 8px;
    margin-top: 3px;
}

</style>

<script type="text/javascript">	  
	  $(document).ready(function(){
		  
		
		//clearinterval(x);
		setTimeOut(function({
			$('#invoice').load("invoice.php");
			
			
		},1000));
		
		

 
    });   
	
	</script>



</head> 
<body>


 

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #0e9e35;">
 <img src='logo.png' height="60px"/>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	
		
	
	<!-- Collection of nav links, forms, and other content for toggling -->
	
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a href="./" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="#" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="About Us">About</a></li>
		     <li class="nav-item"><a href="./logged.php?m=<?php echo md5(md5("watch-ads")); ?>" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Watch Ads & Start Making Money">Watch Ads</a></li>
			 <li class="nav-item"><a href="./logged.php?m=<?php echo md5(md5("earn-by-quiz")); ?>" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Earn Money By Answering Questions">Earn By Quiz</a></li>
			<li class="nav-item"><a href="#" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Send Your Product  Advertisement To Us">Advertise</a></li>
			<li class="nav-item"><a href="#" class="nav-link" data-toggle="tooltip" data-placement="bottom" title="For Any Query,Please Contact Us">Contact Us</a></li>
		</ul>

		<ul class="navbar-nav mr-auto" style="margin-right:300px">
			<li class="nav-item"><a href="./logged.php?m=<?php echo md5(md5("notification-admin")); ?>" class="nav-link notifications" data-toggle="tooltip" data-placement="bottom" title="Notifiaction From Admin"><i class="fa fa-bell-o"></i><span class="badge badge-primary">1</span></a></li>
			<li class="nav-item"><a href="./logged.php?m=<?php echo md5(md5("message-admin")); ?>" class="nav-link messages" data-toggle="tooltip" data-placement="bottom" title="Message From Admin"><i class="fa fa-envelope-o"></i><span class="badge badge-primary">5</span></a></li>
			<li class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action" data-toggle="tooltip" data-placement="bottom" title="Click For Menu"><i class="fa fa-user"></i> <?php include "database.php"; echo $u; ?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="./logged.php?m=<?php echo md5(md5("edit-profile")); ?>" class="dropdown-item"><i class="fa fa-user-o"></i> Edit Profile</a></li>
					<li><a href="./logged.php?m=<?php echo md5(md5("balance")); ?>" class="dropdown-item"><i class="fa fa-calendar-o"></i> Balance</a></li>
					<li><a href="./logged.php?m=<?php echo md5(md5("payment-details")); ?>" class="dropdown-item"><i class="fa fa-sliders"></i> Payment Details</a></li>
					<li><a href="./logged.php?m=<?php echo md5(md5("withdraw-balance")); ?>" class="dropdown-item"><i class="fa fa-dollar"></i> Withdraw</a></li>
					<li><a href="./logged.php?m=<?php echo md5(md5("refer")); ?>" class="dropdown-item"><i class="fa fa-user"></i> Refer</a></li>
					<li><a href="./logged.php?m=<?php echo md5(md5("invoice")); ?>" class="dropdown-item"><i class="fa fa-sliders"></i> Invoice</a></li>
					<li><a href="./logged.php?m=<?php echo md5(md5("statistics")); ?>" class="dropdown-item"><i class="fa fa-sliders"></i> Statistics</a></li>
					<li class="divider dropdown-divider"></li>
					<li><a href="./logged.php?m=<?php echo md5(md5("logout")); ?>" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
	 </div>
</nav>

<div class="container" >
  <div class="row">

 




 
<script type="text/javascript">
$('.popover-dismiss').popover({
  trigger: 'focus'
})
</script>
 


<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
document.addEventListener('keydown', function() {
  if (event.keyCode == 123) {
    alert("This function has been disabled to prevent you from stealing my code!");
    return false;
  } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
    alert("This function has been disabled to prevent you from stealing my code!");
    return false;
  } else if (event.ctrlKey && event.keyCode == 85) {
    alert("This function has been disabled to prevent you from stealing my code!");
    return false;
  }
}, false);

if (document.addEventListener) {
  document.addEventListener('contextmenu', function(e) {
    alert("This function has been disabled to prevent you from stealing my code!");
    e.preventDefault();
  }, false);
} else {
  document.attachEvent('oncontextmenu', function() {
    alert("This function has been disabled to prevent you from stealing my code!");
    window.event.returnValue = false;
  });
}

</script>


 
<?php
include "database.php";
include "Get.php";
if (($_SESSION["status"]==0)){
header("Location: ./"); 
exit();	
	
}
else{

if (count($_GET)){
$data=$_GET['m'];
if ($data==md5(md5("edit-profile"))){
	include 'edit_profile.php';
}
else if ($data==md5(md5("balance"))){
	include "balance.php";
}
else if ($data==md5(md5("payment-details"))){
	include "payment.php";
}
else if ($data==md5(md5("balancer"))){
	echo "Hello Rahat";
}
else if ($data==md5(md5("watch-ads"))){
	include "watch.php";
}
else if ($data==md5(md5("message-admin"))){
	include "message.php";
}
else if ($data==md5(md5("notification-admin"))){
	include "notification.php";
}
else if ($data==md5(md5("withdraw-balance"))){
	include "withdraw.php";
}
else if ($data==md5(md5("refer"))){
	include "refer.php";
}
else if ($data==md5(md5("statistics"))){
	include "statistics.php";
}
else if ($data==md5(md5("invoice"))){
	//echo '<p id="invoice"></p>';
	include "invoice.php";
}
else if ($data==md5(md5("earn-by-quiz"))){
	include "earn_by_quiz.php";
}

else if ($data==md5(md5("logout"))){
	include "logout.php";
}




else{
	
include "default.php";
//include "test.js";
}
//include "message.php";

}
else{
include "loggedHome.php";	
}
}

if (isset($_POST['payment'])){
	$con->autocommit(FALSE);
	$method=$_POST['p'];
	$pp=$_POST['PP'];
	$pas=$_POST['pass'];
	if(md5($pas)==$pass){
		
	$sqlForBalance="UPDATE  pay SET method='$method',pp='$pp' WHERE username='$user'";	
	
	$resultForBalance=$con->query($sqlForBalance);
	if($resultForBalance){
		$con->commit();
		echo " Update Success";
		
		
	}
	else{
		$con->rollback();
		echo"Error Occured".$con->error;
	}
	
	
	
}


}
else if (isset($_POST['withdraw'])){
	$con->autocommit(FALSE);
	$reqdate=date("Y-m-d");
	$method=$_POST['wpp'];
	$pp=$_POST['wphoneNumber'];
	$pas=$_POST['pas'];
	$amount=$_POST['amount'];
	if(md5($pas)==$pass){
		
	$sqlForInvoice="INSERT INTO  invoice SET method='$method',phone='$pp',amount='$amount' , username='$u',Requested=CURRENT_DATE();";	
	$new_bal=$bal_now-$amount;
	$deductBalance="UPDATE balance SET balance_now='$new_bal' WHERE username='$u';";
	$resultForDeductBalance=$con->query($deductBalance);
	$resultForInvoice=$con->query($sqlForInvoice);
	if($resultForInvoice&&$resultForDeductBalance){
		$con->commit();
		//echo " Invoice Received!!! Just Wait. You Will Be Paid Soon.";
		include "InvoiceCreated.php";
		
	}
	else{
		$con->rollback();
		echo"Error Occured".$con->error;
		//echo $u."     ".$reqdate;
	}
	
	
	
}


}


//echo $_SESSION['username'];



?>


</div>



</div>







<div class="container" >

    <div class="row" >

    <div class="col" id="dv">

	<h3 >Easy Use</h3> EasyEarn contains some easy processes for viewing ads and answering quizzes . 
	
	
	</div>
	
	<div class="col" id="dv">
	
	<h3 >Fast Payment</h3> It takes a maximum of  72 hours only to pay the users.
	</div>
	
	<div class="col" id="dv">
	
<h3 >Well-Known Payment Method</h3> EasyEarn has well-known payment methods like Bkash,Rocket,Bitcoin available.
	</div>
	
	<div class="col" id="dv">

	<h3 >Daily Tasks</h3> EasyEarn has more than 30 ad views per day & 20 quizzes for making money in an easy manner.
	</div>
	
  
 

  
 
    
	
    
 
 
  </div>
</div>
















<div class="container footer" >
  <div class="row" style="color: blue">
    <div class="col">
	 <div class="col">Developed By: </div><div class="col">Md. Rahat</div><div class="col">Nawshin Tabassum</div><div class="col">Md. Tarikul Islam</div>
	<div class="col">&copy EasyEarn.Xyz  <?php date("Y"); ?></div>
	</div>
	
    <div class="col">
	<div class="col">About Us</div><div class="col">Advertise Us</div><div class="col">Help Us</div><div class="col">Contact Us</div>
	</div>
 
  </div>
 
  
</div>




</body>






</html>





                                                        