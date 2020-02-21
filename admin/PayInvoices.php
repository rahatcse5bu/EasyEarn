
<?php
$dt=0;

include "config.php";
$sqlUnpaid="SELECT * FROM invoice WHERE status='Unpaid' ORDER  BY Requested ASC";
$resultUnpaid=$con->query($sqlUnpaid);
if($resultUnpaid){
if($row = mysqli_num_rows($resultUnpaid)){
	echo'<div class="table-responsive"><table class="table table-sm table-dark "><thead><tr><th scope="col">Invoice ID</th><th scope="col">Payment Method</th><th scope="col">Email/Phone</th><th scope="col">Amount</th><th scope="col">Status</th><th scope="col">Requested On</th></tr></thead><tbody><tr>';
	
	while($r=mysqli_fetch_assoc($resultUnpaid)){
		
		echo '<th scope="row" id="id">'.$r["id"].'</th>';
		echo '<th scope="row">'.$r["method"].'</th>';
		echo '<th scope="row">'.$r["phone"].'</th>';
		echo '<th scope="row">'.$r["amount"].'</th>';
		echo '<th scope="row" id="status">'.$r["status"].'</th>';
		echo '<th scope="row">'.$r["Requested"].'</th>';
      
    echo '</tr>';
		
		
	}
	
	  echo '</tbody></table></div>';
	
}

else{

echo '<p class="text-primary" align="center">'."No invoice Yet Created !!!".'</p>';
      
}
}


?>

<script type="text/javascript">
    $('*#status').dblclick(function(){
     var id= $(this).closest('tr').children('th#id').text();
    $(this).html('<form method="POST" id="f2"><input type="hidden" name="invoiceID" value="'+id+'"/><input id="no" name="status" size="'+$(this).text().length+'" type="text" value="'+ $(this).text() + '"> </form>');
 // alert(id);

   });
    $('*#status').change(function(){
		
				$.ajax({
		url: "UpdateData.php",
		type: "POST",
		data: $("#f2").serialize(),
		success: function(d){
			//alert(d);
			
		}
		
	}); 
   	
    
	
	location.reload();
   });  
   
  

</script>