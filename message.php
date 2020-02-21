<script>
$(document).ready(function (){
	$("#send").click(function(){
	//alert("clicked");	
	$.ajax({
		url: "GetSetMessage.php",
		type: "POST",
		data: $("#frm").serialize(),
		success: function(d){
			$('#message').html(d);
			
		}
		
	});
	
	

	
	
	
	
	});
	
	
	

	
	
	
	
	
	
});

</script>

<div class="container">
  <div class="row">
    <div class="col-sm">
  <!---    One of three columns --->
    </div>
  <div class="col-sm">
     <!---    One of three columns --->
    </div>
    <div class="col-sm">
     <!---    One of three columns --->
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
 
    <div class="col-sm">
  <!---    One of three columns --->
    </div>
	
	<div  style="overflow: scroll;max-height:700px">
  <div class="alert alert-success" role="alert" >


<div id="message">
<?php
include "GetMessage.php";
?>

</div>






<form id="frm">
<div class="form-group">
  <label for="comment" id="rp">Write Your Message: </label>
  <textarea class="form-control" rows="5" id="comment" name="c"></textarea>
</div>
<button type="button" class="btn btn-success" id="send">Send Message</button>

</form>
</div>

</div>

    <div class="col-sm">
     <!---    One of three columns --->
    </div>
  
  </div>
</div>





