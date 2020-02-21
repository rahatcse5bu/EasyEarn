<?php
     // session_start();
      include "config.php";
  
      $user= $_SESSION['username'];
	  
      
      $sql="SELECT * FROM user  WHERE username='$user';";
      $result=$con->query($sql);
      if($result){
     while($ro=mysqli_fetch_assoc($result)){
     $username= $ro['username'];
     $email= $ro['email'];
    $pass= $ro['pass'];
    
      }
      }
      else{
          echo $con->error;
      }
      
  
      
      
      ?>