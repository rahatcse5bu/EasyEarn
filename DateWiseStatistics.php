<?php
session_start();
?>

<?php
$dt=0;
include "config.php";
$u=$_SESSION['username'];
$dd=$_POST['s_date'];
$dl=$_POST['e_date'];


$y=substr($dl,6,4);
$y=$y."-";
$y=$y.substr($dl,0,2);
$y=$y."-";
$y=$y.substr($dl,3,2);
$dl=$y;

echo '<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col" class="table-primary" >Date</th>
      <th scope="col" class="table-success">Ad Views</th>
      <th scope="col" class="table-warning">Ad Income</th>
	  <th scope="col" class="table-success">Quiz Completed</th>
      <th scope="col" class="table-warning">Quiz Income</th>
	   
    </tr>
  </thead>
  <tbody>
    <tr>';


$dataArray=array();
//$ads=array();
//$quizzes=array();
// Loop Start
while (1){
$x=substr($dd,6,4);
$yr=$x;
$x=$x."-";
$x=$x.substr($dd,0,2);
$mn=substr($dd,0,2);
$x=$x."-";
$x=$x.substr($dd,3,2);
$dt=substr($dd,3,2);
$x=$dd;
//$formattedDate=$dt."-".$mn."-".$yr;

$sqlForStat="SELECT * FROM ads WHERE username='$u' AND date='$x'";
//$x=$dd;
$resultForStat=$con->query($sqlForStat);
if($resultForStat){
if($row = mysqli_num_rows($resultForStat)){


 
	//array_push($dates,$formattedDate);
	while($r=mysqli_fetch_assoc($resultForStat)){
		$dt++;
		array_push($dataArray,'['.'"'.$x.'"'.','.$r["ads"].','.$r["quiz"].','.$r["adsIncome"].','.$r["quizIncome"].'],');
	
		echo '<th scope="row">'.$dd.'</th>';
		echo '<th scope="row">'.$r["ads"].'</th>';
		echo '<th scope="row">'.($r["adsIncome"]).'</th>';
		echo '<th scope="row">'.$r["quiz"].'</th>';
		echo '<th scope="row">'.($r["quizIncome"]).'</th>';
		
		
		
    echo '</tr>';
		
		
	}
	
	  //echo '</tbody></table></div>';
	
}

else{

//echo '<p class="text-primary" align="center">'."No Refer  data Yet !!!".'</p>';
//echo $x;
//$dd = strtotime("+1 day", strtotime($dd));
//echo date("Y-m-d", $dd);
      
}
}
else {
	//echo "error occured";
}
if ($dd==$dl){
	break;
}

$dd = strtotime("+1 day", strtotime($dd));
$dd=date("Y-m-d", $dd );
//echo $dd."\n   ";


}

	
	//echo "last dt : ".$dl;
	echo '</tbody></table></div>';
	
	
	//echo print_r($dataArray);

      ?>
	  
	  
	  
	  
	  
	  
	  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
		
		
          ['Date', 'Ads Viewed','Quiz Answered','Ads Income','Quiz Income'],
		  
		  <?php  
		  //foreach (array_combine($dates, $ads) as $dt => $ad ) {
		  //echo '['.'"'.$dt.'"'.','.$ad.'],'; 
//}     

foreach ($dataArray as $t){
	echo $t;
	
}


 ?>
          
        ]);

        var options = {
          title: 'Your Statistics',
          hAxis: {title: 'Date',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <div class="container">
    <div id="chart_div" style=" height: 1020px;font-size:10px"></div></div>
  </body>
</html>
