<?php
include "database.php";
if ($bal_now>=$mw){
	//echo "Plz fill up the form to withdraw...";
	include "withdraw_form.php";
	
	
}

else{
	
//echo "You are not eligible to withdraw. You Should have at least $200 in your current balance.";	
	
	include "withdraw_ineligible.php";
}




?>