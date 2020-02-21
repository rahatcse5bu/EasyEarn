



<?php
ini_set('default_charset', 'utf-8');
//include "GetQuiz.php";
$done=0;
//$_SESSION['userAns1']=$_POST['userAns1'];
//$_SESSION['userAns2']=$_POST['userAns2'];
//$_SESSION['id']=$_GET['id'];
//echo "hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii";
//if(isset($_POST['btn'])){
	//print_r($_POST);
	$url="https://www.google.com/recaptcha/api/siteverify";
	$data=[
	   'secret' => "6LeOts0UAAAAAGDBY5vimzEgfCArxcMkhqYOOxhm",
	   'response' => $_POST['token'],
	   'remoteip' => $_SERVER['REMOTE_ADDR']
		
		];
    $options = array(
	'http' => array(
	   'header' => "Content-type: application/x-www-form-urlencoded\r\n",
	   'method' => 'POST',
	   'content' => http_build_query($data)
	)
	);
	
	$context = stream_context_create($options);
	$response= file_get_contents($url,false,$context);
	$res= json_decode($response,true);
	if(($res['success']==true)&&($done==0)){
	 
		//include "Reward2.php";
		//echo "Captcha success";
	
		
	}
	
	else{
		echo "Error occured!";
		$done=1;
	}
	//echo $res['success'];
	//print_r($res);
//}
?>