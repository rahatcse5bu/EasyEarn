
<?php
session_start();

?>

<html>
<head>
<!---
<link rel="stylesheet" href="b/bootstrap.min.css"/>

!--->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  
  
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<!-- Extra For Sign Up Page !--->
<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
<!-- Extra For Sign Up Page Ends !--->
<link rel="stylesheet" href="b/loginModal.css"/>
<link rel="stylesheet" href="b/SignUpModal.css"/>

<style type="text/css">

@font-face{
	
	font-family: tsevenSegment;
	src: url("SevenSegment.ttf");
	
}

@font-face{
	
	font-family: FFT;
	src: url("FFT.ttf");
	
}
#t1f{
	font-family: sevenSegment; 
}
#t2{
	font-family: sevenSegment; 
}

#lst_pd{
	font-family: FFT; 
}
#total_user{
	font-family: tsevenSegment; 
}
#total_paid{
	font-family: tsevenSegment; 
}
#total_ad{
	font-family: tsevenSegment; 
}
#total_quiz{
	font-family: tsevenSegment; 
}
.menu{
	
	background-color:green;
	font-family: cursive;
	
}

.navbar-collapse {
    margin-left: auto;
    width: 100%;
    margin: auto;
    padding-left: 40%;
}
.navbar {
    background-color: #ffc107;
}

#txt1 {
    border: 4px solid #28a745;
    border-radius: 8px;
    padding: 8px;
    font-family: cursive;
    margin-top: 4px;
    margin-bottom: 4px;
    color: #14ed6b;
    line-height: 30px;
    animation: none;
    background-color: #000000;
}
#txt2 {
    border: 4px solid #28a745;
    border-radius: 8px;
    padding: 8px;
    font-family: cursive;
    margin-top: 4px;
    margin-bottom: 4px;
    color: #14ed6b;
    line-height: 30px;
    animation: none;
    background-color: #000000;
}

#slide {
    border: 4px solid green;
    border-radius: 8px;
    margin-top: 4px;
    margin-bottom: 4px;
}

.bx1, .bx2, .bx3,.bx4 {
    border: 1px solid #0e0a0a;
    border-radius: 6px;
    margin-right: 5px;
    background-color: #4950616b;
    margin-bottom: 5px;
    padding: 15px;
	background-image: linear-gradient(green, white, grey);
}
.totalUser, .totalUserValue,.totalAdViews,.totalAdViewsValue,.totalPaid,.totalPaidValue,.totalQuiz,.totalQuizValue {
    padding: 2px;
    font-size: 25px;
    color: black;
    margin-right: 4px;
}
.totalAdViews {
    padding: 2px;
    color: black;
    margin-right: 4px;
    font-size: 23px;
  
}
.totalQuiz {
    padding: 2px;
    color: black;
    margin-right: 4px;
    font-size: 21px;
  
}
 .totalUserValue {
    padding: 3px;
    font-size: 25px;
    color: black;
    width: 180px;
    margin: auto;
}
.totalQuizValue {
    padding: 3px;
    font-size: 25px;
    color: black;
    width: 180px;
    margin: auto;
}
.totalAdViewsValue, {
    padding: 2px;
    font-size: 25px;
    color: black;
	width: 180px;
    margin: auto;
}
.totalPaidValue {
    padding: 2px;
    font-size: 25px;
    color: black;
	width: 180px;
    margin: auto;
}
.totalQValue {
    padding: 2px;
    font-size: 25px;
    color: black;
	width: 180px;
    margin: auto;
}


.tbl{
	
    margin-top: 3px;
    margin-bottom: 3px;
    width: 100%;
    border: 2px solid #1a1944;
    border-radius: 9px;
	
    padding: 3px;

}
.last_paid {
    border: 2px solid var(--purple);
    border-radius: 8px;
    word-spacing: 8px;
    text-decoration-style: solid;
    font-size: 28px;
    background-color: black;
    font-family: cursive;
    font-weight: bold;
}
.footer {
    border: 3px solid #77808a;
    background-color: black;
    border-radius: 8px;
    font-family: fantasy;
    font-weight: 200;
    padding: 20px;
}
</style>

<script type="text/javascript">
$(document).ready(function (){
	
	
	//adcount showing ajax starts
	setInterval(function(){
		
		$('#last_paid').load("last_paid.php");
	},1000);
	
		setInterval(function(){
		
		$('#total_ad').load("totalAd.php");
	},1000);
	
	setInterval(function(){
		
		$('#total_paid').load("totalPaid.php");
	},1000);
	setInterval(function(){
		
		$('#total_user').load("totalUser.php");
	},1000);
	
		setInterval(function(){
		
		$('#total_quiz').load("totalQuiz.php");
	},1000);
});


</script>



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






</head>





<body >

<!-- Header Div Starts -->






<!--			
<div class="container menu">
  <div class="row">
    <div class="col">
	<!-- Logo Goes Here !-->
	<!--
	
	</div>
    <div class="col">
	-->
<nav class="navbar navbar-expand-lg navbar-light ">
<img src="logo.png" height="75" width="80"/>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <li class="nav-item"><a href="#homeModal" class="nav-link" "trigger-btn" data-toggle="modal">Home</a></li>
	<li class="nav-item"><a href="#advertiseModal" class= "nav-link" "trigger-btn" data-toggle="modal">Advertise</a></li>
	<li class="nav-item"><a href="#contctModal" class="nav-link" "trigger-btn" data-toggle="modal">Contact</a></li>
    <li class="nav-item"><a href="#adsModal" class= "nav-link" "trigger-btn" data-toggle="modal">Watch Ads</a></li>
	 <li class="nav-item"><a href="#loginModal" class="nav-link" "trigger-btn" data-toggle="modal">Login</a></li>
	<li class="nav-item"><a href="#SignUpModal" class= "nav-link" "trigger-btn" data-toggle="modal">Sign Up</a></li>
	 
	 
      
    </ul>
   
  </div>
</nav>
<!--
</div>

</div>
    
  </div>
-->

<!-- Modal Login Starts -->
<div id="loginModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<form action="" method="post">
				<div class="modal-header">				
					<h4 class="modal-title">Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" required="required" name="usernameInpt">
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Password</label>
							<a href="#" class="pull-right text-muted"><small>Forgot?</small></a>
						</div>
						
						<input type="password" class="form-control" required="required" name="passInpt">
					</div>
				</div>
				<div class="modal-footer">
					<label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
					<input type="submit" class="btn btn-primary pull-right" value="Login" name="login">
				</div>
			</form>
		</div>
	</div>
</div>     


<!--- Login Modal Ends !--->


<!--- Sign Up Modal Starts !--->
			
			
			
			
<div id="SignUpModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
		
		
	<div class="signup-form">
    <form action="" method="post">
		<div class="form-header">
			<h2>Sign Up</h2>
			<p>Fill out this form to register!</p>
		</div>
        <div class="form-group">
			<label>Username</label><div id="errUsername" ></div>
        	<input type="text" class="form-control" name="username" required="required" id="username">
        </div>
        <div class="form-group">
			<label>Email Address</label><div id="errEmail" ></div>
        	<input type="email" class="form-control" name="email" required="required" id="email">
        </div>
		<div class="form-group">
			<label>Password</label><div id="errPass" ></div>
            <input type="password" class="form-control" name="password" required="required" id="password">
        </div>
		<div class="form-group">
			<label>Confirm Password</label><div id="errConPass" ></div>
            <input type="password" class="form-control" name="confirm_password" required="required" id="confirm_password">
        </div>        
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="submit" id="submit">Sign Up</button>
		</div>	
    </form>
	<div class="text-center small">Already have an account? <a href="#loginModal" class="nav-link" "trigger-btn" data-toggle="modal">Login here</a></div>
</div>


</div></div></div>
<!--- Sign Up Modal Ends !--->
			
			
<!-- Modal Advertise Starts -->
<div id="advertiseModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<form action="" method="post">
				<div class="modal-header">				
					<h4 class="modal-title">Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" required="required" name="usernameInpt">
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Password</label>
							<a href="#" class="pull-right text-muted"><small>Forgot?</small></a>
						</div>
						
						<input type="password" class="form-control" required="required" name="passInpt">
					</div>
				</div>
				<div class="modal-footer">
					<label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
					<input type="submit" class="btn btn-primary pull-right" value="Login" name="login">
				</div>
			</form>
		</div>
	</div>
</div>     


<!--- Advertise Modal Ends !--->			
			
<!-- Modal Ads Starts -->
<div id="adsModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="text-success">
			 You Need To Login To View Ads!!!
			
			</div>
			
			
		</div>
	</div>
</div>     


<!--- ads  Modal Ends !--->
			
			



<div class="container" id="t">

  <div class="row" id="txt1">
    


    Earn Money Online Just Viewing Ads On Daily Basis. You Will Be Served With 70 Ads Daily. Stay With EasyEarn AnD Earn Money Online.
  
	</div>


<div class="row" id="slide">
<!--- Slide Part Goes Here !--->


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img class="d-block w-100" src="https://tekkibytes.com/wp-content/uploads/2019/09/Earn-Money-Online-Without-Investment-by-Clicking-Ads.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://1.bp.blogspot.com/-Msz8LsUwTgY/XPOnMv7Nw0I/AAAAAAAAAFA/LfIzcoSPuDEPP-jxgmQAS7FeTkRxXxbKQCEwYBhgL/s1600/Earn%2Bmoney%2Bonline%2Bwithout%2Binvestment%2Bby%2Bclicking%2B1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i2.wp.com/soyamoney.com/wp-content/uploads/2017/04/Earn-money-online-without-investment-by-clicking-advertisment.png.jpg?fit=983%2C356&ssl=1" alt="Third slide">
    </div>
    
    
  </div>
  
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





























  
<!--
    <div class="carousel-item">
      <img src="https://1.bp.blogspot.com/-Msz8LsUwTgY/XPOnMv7Nw0I/AAAAAAAAAFA/LfIzcoSPuDEPP-jxgmQAS7FeTkRxXxbKQCEwYBhgL/s1600/Earn%2Bmoney%2Bonline%2Bwithout%2Binvestment%2Bby%2Bclicking%2B1.jpg" class="d-block w-100" alt="..." height="450" width="400">
    </div>
    <div class="carousel-item">
      <img src="https://i2.wp.com/soyamoney.com/wp-content/uploads/2017/04/Earn-money-online-without-investment-by-clicking-advertisment.png.jpg?fit=983%2C356&ssl=1" class="d-block w-100" alt="..." height="450" width="400">
    </div>
  
  -->
  
  
  
  
  
  
  
  
   
  

 
  
 
  


<!--- Slide Ends --->
</div>

<div class="row" id="txt2">
     
	Dear Advertisers, You Can Publish Your Online Assets Here. We have More Than 5K Daily Active Users. 

	 
    </div>
  </div>



<!--- Slide Div Ends --->







<div class="container">
  <div class="row">
    <div class="col-sm bx1">
   <div class="totalUser"" >  <i class="far fa-user"></i>  Total Users </div>
   
    <p class="totalUserValue"  id="total_user">  </p>
    </div>
	
    <div class="col-sm bx2">
         <div class="totalPaid"  > <i class="fas fa-dollar-sign"></i> Total Paid </div>
		 
		  <p class="totalPaidValue"  id="total_paid" > </p>
    </div>
    <div class="col-sm bx3">
         <div class="totalAdViews"  >  <i class="fas fa-eye-slash"></i> Total Ad Views </div>
		 <p class="totalAdViewsValue"  id="total_ad">  </p>
    </div>
	
	 <div class="col-sm bx4">
         <div class="totalQuiz"  >  <i class="fas fa-eye-slash"></i> Total Quiz Answered </div>
		 <p class="totalQuizValue"  id="total_quiz">  </p>
    </div>
	
  </div>
  
</div>




<div class="container">
<div class="row last_paid"><div class="col"></div><div class="col" id="lst_pd">Last Paid:</div><div class="col"></div></div>
<div class="row">
<div class="tbl" id="last_paid"></div>
</div>
<!--- <?php include "config.php"; include "last_paid.php"; ?> -->

</div>



<div class="container footer" >
  <div class="row">
    <div class="col">
	 <div class="col">Developed By: </div><div class="col">Md. Rahat</div><div class="col">Nawshin Tabassum</div><div class="col">Md. Tarikul Islam</div>
	<div class="col">&copy EasyEarn.Xyz  <?php date("Y"); ?></div>
	</div>
	
    <div class="col">
	<div class="col">About Us</div><div class="col">Advertise Us</div><div class="col">Help Us</div><div class="col">Contact Us</div>
	</div>
 
  </div>
 



</div>







<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>

<script src="rahat.js"></script>
<script type="javascript"> $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
});  </script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!---<script src="b/jquery.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="b/popper.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script type="text/javascript" src="b/bootstrap.min.js"></script>
!-->
</body>


</html>

<?php 
include "Get.php";
if(isset($_POST['submit'])){
	include "config.php";
    include "database.php";
	
	$dt=date("Y-m-d");
	$username=$_POST['username'];
	$_SESSION['username']=$username;
	$email=$_POST['email'];
	$pass=md5($_POST['password']);
	$ref=$_GET['ref'];
	$msgTable=$username."_"."msg";
	$ntfTable=$username."_"."ntf";
	$sql="INSERT INTO user SET username='$username',email='$email',pass='$pass',Ref='$ref',reg_date='$dt';";
	$sql1="INSERT INTO balance SET username='$username',balance_now='$wb',total_balance='$wb';";
	$sql2="INSERT INTO message SET username='$username';";
	$sql3="INSERT INTO notification SET username='$username';";
	$sql4="INSERT INTO pay SET username='$username';";
	$sql5="INSERT INTO ref SET username='$username',refer='$ref';";
	$sql6="CREATE TABLE $msgTable (id INT(8) NOT NULL AUTO_INCREMENT,you LONGTEXT,adminmsg LONGTEXT,PRIMARY KEY(id));";
	$sql7="CREATE TABLE $ntfTable (id INT(8) NOT NULL AUTO_INCREMENT,adminntf LONGTEXT,PRIMARY KEY(id));";
	$sql8="INSERT INTO $msgTable SET adminmsg='welcome '";
	$sql9="INSERT INTO $ntfTable SET adminntf='welcome '";
	//$sql2.="INSERT INTO ref SET username='$username',refer='$ref';";
	//$result=mysqli_multi_query($con,$sql);
	$con->autocommit(FALSE);
	$result=$con->query($sql);
	$result1=$con->query($sql1);
	$result2=$con->query($sql2);
	$result3=$con->query($sql3);
	$result4=$con->query($sql4);
	$result5=$con->query($sql5);
	$result6=$con->query($sql6);
	$result7=$con->query($sql7);
	$result8=$con->query($sql8);
	$result9=$con->query($sql9);
if(($result+$result1+$result2+$result3+$result4+$result5+$result6+$result7+$result8+$result9)==10){
	$_SESSION['username']=$username;
	require "Mail.php";
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='index.php';
    </SCRIPT>");	
	$con->commit();
	
	
}
else{
	$con->rollback();
	echo "failed. ".$con->error;
	
}

	//if ($result){
		//echo $con->error;
		//$r2=mysqli_multi_query($con,$sql2);
		//if($r2){
			//$x=$con->query($sql4);
			//$y=$con->query($sql3);
			
			
		//$_SESSION['username']=$username;
		//echo ("<SCRIPT LANGUAGE='JavaScript'>
   // window.alert('Succesfully Registered')
   // window.location.href='index.php';
    //</SCRIPT>");	
	//	}
		//else{
		//echo "failed 2. ".$con->error;	
			
		//}
		
	
	//}
	//else{
		
	//	echo "failed ";
//		echo $con->error;
	
//}
}

else if(isset($_POST['login'])){
	include "config.php";
    include "database.php";
	$login=0;
	$usernameInpt=$_POST['usernameInpt'];
	$passInpt=md5($_POST['passInpt']);
	
	$sqlForLogin="SELECT username,pass FROM user;";
	
      $resultForLogin=$con->query($sqlForLogin);
      while($Result=mysqli_fetch_assoc($resultForLogin)){
          if ($usernameInpt==$Result['username'] && $passInpt==$Result['pass']){
              $_SESSION['status']=1;
            //  setcookie("status",1);
               $_SESSION['username']=$usernameInpt;
               // setcookie("username",$usernameForLogin);
			   $login=1;
			   break;
	  }}
            if($login==1){  
         //     echo ("<SCRIPT LANGUAGE='JavaScript'>
   // window.alert('Succesfully Logged In')
  //  window.location.href='./logged.php';
   // </SCRIPT>");
	include "loginSuccess.php";
			}
	
	
	else{
		$_SESSION['status']=0;
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Wrong Username Or Password')
    window.location.href='index.php';
    </SCRIPT>");
	}	
	
	}
	
		
	
	//echo $_SESSION['status']. "   Rahat   ".$_SESSION['username'];

?>