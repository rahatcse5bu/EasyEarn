
<head>

<script type="text/javascript">
$(document).ready(function (){
	//hiding "Get Reward" Button
	//alert("hiii");
	setInterval(function(){
		
		$('#ref_list').load("refList.php");
	},1000);
		
		
	});
	
</script>


	
</head>


<br>
<div class="container">
<p id="ref_list"></p>
</div>


<div class="table-responsive">
<table class="table table-active table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col" >Refer Link</th>
      <th scope="col" >Your Refer</th>
      <th scope="col" >Refer Commision</th>
      <th scope="col" >Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" >http://localhost/ptc/?ref=<?php include "database.php"; echo$u; ?></th>
      <td  >---</td>
      <td id="com">10%</td>
      <td ><?php include "database.php"; echo$u; ?></td>
    </tr>
 
  </tbody>
</table>

</div>