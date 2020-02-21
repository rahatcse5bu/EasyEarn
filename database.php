
<?php

      include "config.php";
	  
	  if ((!$_SESSION['username'] == '') || (isset($_SESSION['username'])) ){
    $u=$_SESSION['username'];
}
    $msg="No Message From admin";
	$ntf="Thanks For Using EasyEarn";
	//echo "rahaat";
     //echo $u;
	// $u="rahatcse5bu";

      $sqlx="SELECT * FROM user,message,notification,balance  WHERE user.username='$u' AND message.FromUser='$u' AND notification.username='$u' AND balance.username='$u'  ;";
      $result=$con->query($sqlx);
      if($result){
     while($ro=mysqli_fetch_assoc($result)){
     
     $email= $ro['email'];
    $pass= $ro['pass'];
	//$ads=$ro['id'];
	//$msg=$ro['adminmsg'];
    //$ntf=$ro['ntf'];
	$bal_total=$ro['total_balance'];
	$bal_now=$ro['balance_now'];
	//echo "Working";
      }
	  
//echo "Workedd";
      }
      else{
          echo $con->error;
      }
   
 
	
	   
      
      
      ?>