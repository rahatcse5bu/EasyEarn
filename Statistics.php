

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  
  $(document).ready(function (){

 $("#datepicker2").change(function(){
	// alert($("#datepicker2").val);
	 	$.ajax({
		url: "DateWiseStatistics.php",
		type: "POST",
		data: $("#dp").serialize(),
		success: function(d){
			$('#t').html(d);
			
		}
		
	});
	 
	 
 });
 
 });

  </script>
  
  
  
  <style type="text/css">
  .datepicker{
	margin: auto;
    font-family: arial;
    font-size: inherit;
    line-height: inherit;
    width: auto;
    padding: 8px;
    margin-top: 6px;  
	margin-bottom: 10px;
  }
  #h{
	border: 4px;
    border-radius: 4px;
    padding: 5px;
    margin-right: 0px;
    margin-left: 0px;
    background-color: mediumaquamarine;
    margin-top: 4px;
    margin-left: 4px;
    width: 140px;
    margin: auto;
    font-family: monospace;
    font-size: x-large;
    text-align: center;  
	  
  }
  .x{
	  width:auto;
	 padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
   border: 3px solid #4CAF50;
    background-color: #673ab71c;
    border-radius: 8px; 
	padding: 8px;
    margin-top: 5px;
	
  }
  #t{
	  
	margin-top:6px;
	  
	  
  }
  </style>
  
</head>
<body>
 <div class="x">

<div id="h"> Date From: </div>

<form method="post" id="dp">
<input type="text" id="datepicker" name="s_date" class="datepicker">
<div id="h"> Date To: </div>
<input type="text" id="datepicker2" name="e_date" class="datepicker">
 </form>
 
 </div>
 
 
 <div class="container">
 <p id="t">Please Select Date</p>
 </div>
</body>
</html>


