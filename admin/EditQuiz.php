<?php
include "config.php";

mysqli_set_charset($con,'utf8');
$sqlForAdminControl="SELECT * FROM quiz";
$resultForAdminControl=$con->query($sqlForAdminControl);
if($resultForAdminControl){
if($row = mysqli_num_rows($resultForAdminControl)){


echo '<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
  <tbody>';
	
	while($r=mysqli_fetch_assoc($resultForAdminControl)){
		echo '<form  id="f3">';
		echo '<tr>';
		echo '<th scope="col" class="table-primary" >ID</th>';
		echo '<th scope="row">'.$r["id"].'</th>';
		echo '<input type="hidden" name="id" value="'.$r['id'].'"/>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<th scope="col" class="table-primary" >Content</th>';
		echo '<th scope="row">'.'<textarea style="height:400px;width:100%" name="question">'.$r["description"].'</textarea>'.'</th>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<th scope="col" class="table-primary" >Question-1</th>';
		echo '<th scope="row">'.'<textarea style="height:200px;width:100%" name="quiz1">'.$r["quiz1"].'</textarea>'.'</th>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<th scope="col" class="table-primary" >Ans-1</th>';
		echo '<th scope="row">'.'<textarea style="height:200px;width:100%" name="ans1">'.$r["ans1"].'</textarea>'.'</th>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<th scope="col" class="table-primary" >Options For Quiz-1</th>';
		echo '<th scope="row">'.'<textarea style="height:400px;width:100%" name="t1">'.$r["t1"].'</textarea>'.'</th>';
		echo '</tr>';
		//next quiz
		echo '<tr>';
		echo '<th scope="col" class="table-primary" >Question-2</th>';
		echo '<th scope="row">'.'<textarea style="height:200px;width:100%" name="quiz2">'.$r["quiz2"].'</textarea>'.'</th>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<th scope="col" class="table-primary" >Ans-2</th>';
		echo '<th scope="row">'.'<textarea style="height:200px;width:100%" name="ans2">'.$r["ans2"].'</textarea>'.'</th>';
		echo '</tr>';
		
		echo '<tr>';
		echo '<th scope="col" class="table-primary" >Options For Quiz-2</th>';
		echo '<th scope="row">'.'<textarea style="height:400px;width:100%" name="t2">'.$r["t2"].'</textarea>'.'</th>';
		echo '</tr>';
		
		
		echo '<tr>';
		echo '<th scope="col" class="table-primary " >Action</th>';
		echo '<th scope="row" class="table-primary " ><button class="btn btn-info" id="sbmt">Submit</button></th>';
		echo '</tr>';
		
		
		
		
		
      echo '</form>';
    
		
		
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
	  
	  
	  
<script type="text/javascript">
    $('*#sbmt').click(function(){
    // var id= $(this).closest('tr').children('th#id').text();
    //$(this).html('<form method="POST" id="f3"><input type="hidden" name="invoiceID" value="'+id+'"/><input id="no" name="status" size="'+$(this).text().length+'" type="text" value="'+ $(this).text() + '"> </form>');
 // alert(id);


				$.ajax({
		url: "UpdateQuiz.php",
		type: "POST",
		data: $("#f3").serialize(),
		success: function(d){
			alert(d);
			location.reload();
		}
		
	}); 
	
	

   });
  
   
  

</script>
	  