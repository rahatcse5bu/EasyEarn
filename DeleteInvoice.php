<?php
$InID=$_POST['id'];
//$tk=$_POST['amount'];
include "config.php";
$sqlForInvoiceDelete="DELETE FROM invoice WHERE id='$InID'";
$resultForInvoiceDelete=$con->query($sqlForInvoiceDelete);


if($resultForInvoiceDelete){

}
else{
	echo "Error .............................................................";
}
?>