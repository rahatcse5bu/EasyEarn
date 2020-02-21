<?php
session_start();
?>
<head>
<!---
<link rel="stylesheet" href="b/bootstrap.min.css"/>

!--->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
  
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">


<style type="text/css">

button{
	
	border-radius: 12px;
    font-family: cursive;
}
#data{
	border: 4px solid #0e0ed4a1;
    border-radius: 10px;
    margin: 8px;
    padding: 4px;
}
</style>
</head>

<div class="container " style="border: 4px solid #8BC34A;
    border-radius: 6px;
    background-color: #1f33bb47;
    padding: 14px;">

<div class="row"> 

<div class="col" ><button type="button" class="btn btn-primary" id="pay">Pay Users</button></div>
<div class="col" ><button type="button" class="btn btn-primary" id="notify">Notify Users</button></div>
<div class="col" ><button type="button" class="btn btn-primary" id="message">Messaging</button></div>


 </div>
 
 

 
 
 
 <div class="row " id="workspace"> 
 
 </div>

</div>
<div class="container" style="border: 4px solid #8BC34A;
    border-radius: 6px;
    background-color: #1f33bb47;
    padding: 14px;margin-top:6px">
 <div class="row"> 

<div class="col" ><button type="button" class="btn btn-primary" id="quiz">Edit Quizzes</button></div>
<div class="col" ><button type="button" class="btn btn-primary" id="notify">Notify Users</button></div>
<div class="col" ><button type="button" class="btn btn-primary" id="message">Messaging</button></div>


 </div>

</div>

<p id="data"></p>
	  
	  

	 
<script type="text/javascript">	  
	  $(document).ready(function(){
		  
		
		//clearinterval(x);
		$('#data').load("GetAdminData.php");
		$('#pay').click(function(){
			$('#workspace').load("PayInvoices.php");
			$('#workspace').toggle();
			
		});
			$('#quiz').click(function(){
			$('#workspace').toggle();
			$('#workspace').load("EditQuiz.php");
			//$('#workspace').toggle();
			
		});

 
    });   
	
	</script>