<?php
session_start();
?>

<?php
$dt=0;
include "config.php";
$u=$_SESSION['username'];
$sqlForRefList="SELECT * FROM user WHERE ref='$u' ORDER BY reg_date ASC";
$resultForRefList=$con->query($sqlForRefList);
if($resultForRefList){
if($row = mysqli_num_rows($resultForRefList)){


echo '<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col" class="table-primary" >Serial</th>
      <th scope="col" class="table-success">Your Refer</th>
      <th scope="col" class="table-warning">Refer On</th>
    </tr>
  </thead>
  <tbody>
    <tr>';
	
	while($r=mysqli_fetch_assoc($resultForRefList)){
		$dt++;
		echo '<th scope="row">'.$dt.'</th>';
		echo '<th scope="row">'.$r["username"].'</th>';
		echo '<th scope="row">'.$r["reg_date"].'</th>';
		//echo '<th scope="row">'.$r["amount"].'</th>';
		//echo '<th scope="row">'.$r["status"].'</th>';
		//echo '<th scope="row">'.$r["Requested"].'</th>';
      
    echo '</tr>';
		
		
	}
	
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