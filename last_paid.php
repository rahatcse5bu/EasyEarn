
<?php
include "config.php";
echo'<div class="table-responsive-sm"><table class="table table-sm table-striped table-dark"><thead><tr><th scope="col">Invoice ID</th><th scope="col">Username</th><th scope="col">Payment Method</th><th scope="col">Email/Phone</th><th scope="col">Amount</th><th scope="col">Paid On</th></tr></thead><tbody><tr>';
$sqlForInvoice="SELECT * FROM invoice WHERE status='Paid' ORDER BY Paid_on DESC LIMIT 10";
$resultForInvoice=$con->query($sqlForInvoice);
if($resultForInvoice){
	while($r=mysqli_fetch_assoc($resultForInvoice)){
		
		echo '<th scope="row">'.$r["id"].'</th>';
		echo '<th scope="row">'.$r["username"].'</th>';
		echo '<th scope="row">'.$r["method"].'</th>';
		if(strlen($r['phone'])<12){
			$pn=str_repeat("*", strlen($r["phone"])-4) . substr($r["phone"], -4);
		}
		else{
			$pn=str_repeat("*", strlen($r["phone"])-13) . substr($r["phone"], -16);
		}
		
		echo '<th scope="row">'.$pn.'</th>';
		echo '<th scope="row">'.$r["amount"].'</th>';
		//echo '<th scope="row">'.$r["status"].'</th>';
		echo '<th scope="row">'.$r["Paid_on"].'</th>';
      
    echo '</tr>';
		
		
	}
	
	
}
      
    
   
  echo '</tbody></table></div>';

?>

