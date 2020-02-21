

<?php

      include "config.php";
	  
	  if ((!$_SESSION['username'] == '') || (isset($_SESSION['username'])) ){
    $u=$_SESSION['username'];
}
    
	//echo "rahaat";
     //echo $u;
	// $u="rahatcse5bu";
	$x=$u."_msg";
	$y=$u."_ntf";
      $sqlx="SELECT * FROM user,$x,$y,message,notification,balance  WHERE user.username='$u' AND message.username='$u' AND notification.username='$u' AND balance.username='$u'  ;";
      $result=$con->query($sqlx);
      if($result){
     while($ro=mysqli_fetch_assoc($result)){
     
     
	$admin_msg=$ro['adminmsg'];
	$you_msg=$ro['you'];
	
	 if(is_null($admin_msg) ){
		 echo '<div class="alert alert-primary" role="alert">';
	echo "You:  ".$you_msg."<br></div>";
	 }
	 else if(is_null($you_msg)){
	echo '<div class="alert alert-secondary" role="alert">';
	echo "Admin: ";
	echo $admin_msg ."    "."<br></div>";
	 }
	 else{
	
	
	echo '<div class="alert alert-secondary" role="alert">';
	echo "Admin: ";
	echo $admin_msg ."    "."<br></div>";
	echo '<div class="alert alert-primary" role="alert">';
	echo "You:  ".$you_msg."<br></div>";
    
      }
	 }
//echo "Workedd";
      }
      else{
        //  echo $con->error;
      }
       
    
    
	   //if(!$msg){
		 //  $msg="No Message From Admin";
	 //  }
      
      
      ?>