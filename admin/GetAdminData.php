<?php

include "config.php";

$sqlForAdminControl="SELECT * FROM admin_control";
$resultForAdminControl=$con->query($sqlForAdminControl);
if($resultForAdminControl){
if($row = mysqli_num_rows($resultForAdminControl)){


echo '<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col" class="table-primary" >Item</th>
      <th scope="col" class="table-success">Amount</th>
      <th scope="col" class="table-warning">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>';
	
	$r=mysqli_fetch_assoc($resultForAdminControl);
		
		echo '<th scope="row">'."Minimum Withdraw".'</th>';
		echo '<th scope="row" id="mw">'.$r["minimum_withdraw"].'</th>';
		echo '<th scope="row">'.'<a href="./?id=1">'."Edit".'</a></th>';
		echo '</tr>';
		echo '<th scope="row">'."Total Ads".'</th>';
		echo '<th scope="row" id="tad">'.$r["total_ads"].'</th>';
		echo '<th scope="row">'."Edit".'</th>';
		echo '</tr>';
		echo '<th scope="row">'."welcome_bounous".'</th>';
		echo '<th scope="row" id="wb">'.$r["welcome_bonus"].'</th>';
		echo '<th scope="row">'."Edit".'</th>';
		echo '</tr>';
		echo '<th scope="row">'."Ad Waiting Time".'</th>';
		echo '<th scope="row" id="adwt">'.$r["ad_waiting_time"].'</th>';
		echo '<th scope="row">'."Edit".'</th>';
		echo '</tr>';
		echo '<th scope="row">'."Refer Income".'</th>';
		echo '<th scope="row" id="ri">'.$r["ref_income"].'</th>';
		echo '<th scope="row">'."Edit".'</th>';
		echo '</tr>';
		echo '<th scope="row">'."Ad Unit Price".'</th>';
		echo '<th scope="row" id="aup">'.$r["ad_unit_price"].'</th>';
		echo '<th scope="row">'."Edit".'</th>';
		echo '</tr>';
		
		echo '<th scope="row">'."Quiz Price".'</th>';
		echo '<th scope="row" id="qp">'.$r["quiz_price"].'</th>';
		echo '<th scope="row">'."Edit".'</th>';
		echo '</tr>';
		echo '<th scope="row">'."Quiz Waiting Time".'</th>';
		echo '<th scope="row" id="qwt">'.$r["quiz_waiting_time"].'</th>';
		echo '<th scope="row">'."Edit".'</th>';
		echo '</tr>';
		echo '<th scope="row">'."Quiz Refer Income".'</th>';
		echo '<th scope="row" id="qri">'.$r["quiz_ref_income"].'</th>';
		echo '<th scope="row">'."Edit".'</th>';
		echo '</tr>';
		//echo '<th scope="row">'."Minimum Withdraw".'</th>';
		//echo '<th scope="row">'.$r["minimum_withdraw"].'</th>';
		//echo '<th scope="row">'."Edit".'</th>';
		
      
    
		
		
	
	
	  echo '</tbody></table></div>';
	
}

else{

echo '<p class="text-primary" align="center">'."No Refer  data Yet !!!".'</p>';
      
}
}
else {
	echo "error occured";
}
	
	
	
      ?>
	  
	  
	  
	  
	  <script type="text/javascript">	  
	  $(document).ready(function(){
		  

    $('#mw').dblclick(function(){

    $('#mw').html('<form method="POST" id="f"><input id="no" name="mw" size="'+$(this).text().length+'" type="text" value="'+ $('#mw').text() + '"> </form>');
 

   });

    $('#mw').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
   	
    
	
	location.reload();
   });  


    $('#tad').dblclick(function(){

    $('#tad').html('<form method="POST" id="f"><input id="no" name="tad" size="'+$(this).text().length+'" type="text" value="'+ $('#tad').text() + '"> </form>');
 

   });

    $('#tad').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
    
	location.reload();				
    
    });


    $('#wb').dblclick(function(){

    $('#wb').html('<form method="POST" id="f"><input id="no" name="wb" size="'+$(this).text().length+'" type="text" value="'+ $('#wb').text() + '"> </form>');
 

   });

    $('#wb').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
    
	location.reload();	
    
    });


    $('#adwt').dblclick(function(){

    $('#adwt').html('<form method="POST" id="f"><input id="no" name="adwt" size="'+$(this).text().length+'" type="text" value="'+ $('#adwt').text() + '"> </form>');
 

   });

    $('#adwt').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
    
	location.reload();				
    
    });



    $('#ri').dblclick(function(){

    $('#ri').html('<form method="POST" id="f"><input id="no" name="ri" size="'+$(this).text().length+'" type="text" value="'+ $('#ri').text() + '"> </form>');
 

   });

    $('#ri').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
    
	location.reload();				
    
    });


    $('#aup').dblclick(function(){

    $('#aup').html('<form method="POST" id="f"><input id="no" name="aup" size="'+$(this).text().length+'" type="text" value="'+ $('#aup').text() + '"> </form>');
 

   });

    $('#aup').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
    
		location.reload();			
    
    });





    $('#qp').dblclick(function(){

    $('#qp').html('<form method="POST" id="f"><input id="no" name="qp" size="'+$(this).text().length+'" type="text" value="'+ $('#qp').text() + '"> </form>');
 

   });

    $('#qp').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
    
		location.reload();			
    
    });



    $('#qri').dblclick(function(){

    $('#qri').html('<form method="POST" id="f"><input id="no" name="qri" size="'+$(this).text().length+'" type="text" value="'+ $('#qri').text() + '"> </form>');
 

   });

    $('#qri').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
    
		location.reload();			
    
    });



    $('#qwt').dblclick(function(){

    $('#qwt').html('<form method="POST" id="f"><input id="no" name="qwt" size="'+$(this).text().length+'" type="text" value="'+ $('#qwt').text() + '"> </form>');
 

   });

    $('#qwt').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
    
		location.reload();			
    
    });


	
    });   
	
	</script>