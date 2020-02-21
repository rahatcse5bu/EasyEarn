<?php

include "config.php";
$sqlForTotalPaid="SELECT SUM(amount) AS x FROM invoice  WHERE status='Paid'";
$resultForTotalPaid=$con->query($sqlForTotalPaid);
if($resultForTotalPaid){
while($row_t_paid=mysqli_fetch_assoc($resultForTotalPaid)){
	echo $row_t_paid['x'];
	
}
}
?>