
$('#submit').submit(function(){

return false;




});
$(document).ready(function(){
	$('#submit').attr("disabled",true);
//alert("Hi Rahat");





$('#username').keyup(function(){
 var username = $(this).val();	
  $.ajax({
	  
	url:'check.php',
    method:"POST",
    data:{user_name:username},
    success:function(data){
      if (data!='0'){
		 $('#errUsername').html('<span style="color:#fa1111 ">Username Not Available</span>');  
		 $('#submit').attr("disabled",true);
		  
	  }
	  else{
		   $('#errUsername').html('<span style="color:#17d437">Username  Available</span>');
		
		  
	  }

	}		
	  
	  
  });	
	
	
});

});

$('#email').keyup(function(){
	$('#submit').attr("disabled",false);
 var email = $(this).val();	
 var pattern= new RegExp('/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\[a-zA-Z]{3,3}/$i');
 //if (pattern.test(email)){
//	 $('#errEmail').html('<span style="color:#fa1111 ">well</span>');
 //}
 // else{
	
//$('#errEmail').html('<span style="color:#fa1111 ">Email Not Valid</span>');

// }
  $.ajax({
	  
	url:'check.php',
    method:"POST",
    data:{mail:email},
    success:function(data){
			
      if (data!='0'){
		 $('#errEmail').html('<span style="color:#fa1111 ">Email Not Available</span>'); 
		 $('#submit').attr("disabled",true);
		 
	  }
	  else{
		   $('#errEmail').html('<span style="color:#17d437">Email Available</span>'); 
		
		  
	  }

		

	
	
	}  
	  
  });

 
	

	
	
});




$('#password').keyup(function(){
 var pass = $(this).val();	
	if (pass.length>8){
	 $('#errPass').html('<span style="color:#17d437">Good Password</span>');
		 
	}
	else{
	$('#errPass').html('<span style="color:#fa1111 ">Password Should Be At Least 8 Characters Long</span>'); 
	$('#submit').attr("disabled",true);	
		
		
	}
});



$('#confirm_password').keyup(function(){
	var pass=$('#password').val();
 var pass2 = $(this).val();	
	if (pass==pass2){
	 $('#errConPass').html('<span style="color:#17d437">Great Job</span>');
		 $('#submit').attr("disabled",false);
	}
	else{
	$('#errConPass').html('<span style="color:#fa1111 ">Password Does not Matches"</span>'); 
	$('#submit').attr("disabled",true);	
		
		
	}
});







