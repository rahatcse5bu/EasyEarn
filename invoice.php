
<?php
$dt=0;


$sqlForInvoice="SELECT * FROM invoice WHERE username='$u' ORDER  BY Requested ASC";
$resultForInvoice=$con->query($sqlForInvoice);
if($resultForInvoice){
if($row = mysqli_num_rows($resultForInvoice)){
	
	echo'<div class="table-responsive"><table class="table table-sm table-dark " style="border:2px solid grey;border-radius:4px;margin-top:5px;"><thead><tr><th scope="col">Invoice ID</th><th scope="col">Payment Method</th><th scope="col">Email/Phone</th><th scope="col">Amount</th><th scope="col">Status</th><th scope="col">Requested On</th><th scope="col">Paid On</th><th scope="col">Action</th></tr></thead><tbody><tr>';
	
	while($r=mysqli_fetch_assoc($resultForInvoice)){
		
		echo '<th scope="row" id="id">'.$r["id"].'</th>';
		echo '<th scope="row">'.$r["method"].'</th>';
		echo '<th scope="row">'.$r["phone"].'</th>';
		echo '<th scope="row">'.$r["amount"].'</th>';
		echo '<th scope="row">'.$r["status"].'</th>';
	if ($r["status"]=="paid"){
		echo '<th scope="row">'.$r["Requested"].'</th>';
		echo '<th scope="row">'.$r["Paid_on"].'</th>';
		echo '<th scope="row">'.'-----'.'</th>';
	}
	else if ($r["status"]=="Unpaid"){
		echo '<th scope="row">'.$r["Requested"].'</th>';
		echo "<th>"."----"."</th>";
		echo '<th scope="row">'.'<button class="btn btn-danger"  id="dlt">Delete</button>'.'</th>';
	}
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
    $('*#dlt').click(function(){
     var id= $(this).closest('tr').children('th#id').text();
    //$(this).html('<form method="POST" id="f2"><input type="hidden" name="id" value="'+id+'"/> </form>');
 // alert(id);

		
				$.ajax({
		url: "DeleteInvoice.php",
		type: "POST",
		data: {id: id},
		//data: $("#f2").serialize(),
		success: function(d){
			//alert(d);
			location.reload();
		}
		
	}); 
   	
    
	
	

   });
      
   
  

</script>