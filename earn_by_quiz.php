<script type="text/javascript">

//jquery 

$(document).ready(function (){
	
	$("#quizDiv").hide();
	//adcount showing ajax starts
	setInterval(function(){
		
		$('#rahat').load("Quizcount.php");
	},1000);
	
	
	

	
});
	
	</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
@font-face{
	
	font-family: sevenSegment;
	src: url("SevenSegment.ttf");
	
}

@font-face{
	
	font-family: Frjole;
	src: url("Frjole.ttf");
	
}

#t{
	font-family: sevenSegment; 
}

#count{
	font-family: sevenSegment; 
}
.info{
	font-family: fantasy; 
	padding:65px;
	font-size:25px;
}
#wrn {
	font-size:27px;
	padding-top:0px;
	padding-left:60px;
	padding-right:60px;
	padding-bottom:60px;
}
#ad{
	
	width: -webkit-fill-available;
}
</style>
</head>
<br>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <button type="button" class="btn btn-dark" id="wa" style="margin-top:2px" >Start Viewing</button>
    </div>
    <div class="col-sm">
     <h1 id="count"><?php echo $qwt; ?></h1>
    </div>
	
    <div class="col-sm">
      <h4 id="rahat"></h4>
	   <h2 id="tt"></h2> <h2 id="tt1"></h2> <h2 id="tt2"></h2>
    </div>
	
  </div>
</div>



<div class="container" id="quizDiv">
  <div class="row" style="background-color:#5a6d85;border:5px;border-radius:6px">
    <div class="col">
    <p style="padding:4px"><?php  include "GetQuiz.php"; echo $des;  ?></p>
    </div>
	
	</div>
	
	
	
	<div class="row" style="background-color:#5a6d85;border:5px;border-radius:6px;margin-top:6px;margin-bottom:4px">
	  <div class="col" style="border:6px;border-radius:5px">
	  <div class="text-info info">For Each Correct Ans, You Will Get Credit <?php echo $qp; ?>, If you failed both you will get <?php echo $qp/2; ?> in total. </div>
	 <p id="wrn" class="text-danger">Hurry Up !!! Time is going to the end.</p>
	  </div>
    <div class="col" style="border:6px;border-radius:5px">
	



<div class="signup-form" style="border:4px;border-radius:3px;color:#044d07">
 <form method="post" id="f2" accept-charset="utf-8" style="border:8px;border-radius:6px">

<p style="text-align:center" >Submit Your Ans Here</p>
<p></p>

	



<div class="form-group">
    <label class="control-label"><?php  include "GetQuiz.php"; echo $quiz1;  ?></label>
    <div class="inputGroupContainer">
     <div class="input-group">
      <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
       <select class="selectpicker form-control" name="userAns1" required>
       <option>Select Correct Ans </option>
            <option value="<?php  include "GetQuiz.php"; echo $t1[0];  ?>"><?php  include "GetQuiz.php"; echo $t1[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[2];  ?>"><?php  include "GetQuiz.php"; echo $t1[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans1;  ?>"><?php  include "GetQuiz.php"; echo $ans1;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t1[1];  ?>"><?php  include "GetQuiz.php"; echo $t1[1];  ?></option>
       </select>
       </div>
       </div></div>
	   
	   
	 
<div class="form-group">
    <label class="control-label"><?php  include "GetQuiz.php"; echo $quiz2;  ?></label>
    <div class="inputGroupContainer">
     <div class="input-group">
      <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
       <select class="selectpicker form-control" name="userAns2" required>
	    <option>Select Correct Ans </option>
		
		
		
            <option value="<?php  include "GetQuiz.php"; echo $t2[0];  ?>"><?php  include "GetQuiz.php"; echo $t2[0];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[2];  ?>"><?php  include "GetQuiz.php"; echo $t2[2];  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $ans2;  ?>"><?php  include "GetQuiz.php"; echo $ans2;  ?></option>
			<option value="<?php  include "GetQuiz.php"; echo $t2[1];  ?>"><?php  include "GetQuiz.php"; echo $t2[1];  ?></option>
			
       </select>
       </div>
       </div></div>
	   
	<div class="form-group">
  <label class="control-label"><?php $x=rand(1,99); $y=rand(1,9); echo $x." + ".$y." = ?"; $_SESSION['z']=$x+$y;?></label>
   <div class="inputGroupContainer">
   <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="z" name="z" placeholder="Summation" class="form-control" required="true"  type="number"></div>
   </div>
    </div>

<input type="hidden" name="token"  id="token"/>
	<div align="center">
	<div class="form-group" align="center" >
    <div class="inputGroupContainer" align="center">
     <div class=" input-group" align="center"><span class="input-group-addon"></span><button type="submit" class="btn btn-primary"  id="ok">Submit</button>
     </div>
    </div></div></div>
	
	</form>
	</div>
	
	
	
                         
     </div> 
	 
	 
	     
	 
	 
	 
  </div>
</div>                        






<br>

<div class="container" >

<img id="ad" src="https://img.affasi.com/operatebanner/imgfile/2018-12-28/5c257fd0638ad.jpg"/>
<!----Ad Slot-2 !--->
<img id="ad"  src="https://www.club4you.net/bilder/468x60-c4y.jpg"/>
<!----Ad Slot-3 !--->
<img  id="ad" src="http://wad.ojooo.com/images/banners/rsz_brave.png"/>
<!----Ad Slot-4 !--->
<img id="ad"  src="https://p3.adhitzads.com/s/ad_files/1571327622img_ad_cmp_403677.jpg"/>
<!----Ad Slot-5 !--->
<img id="ad"  src="https://wad.ojooo.com/images/banners/pr_6.png"/>
<!----Ad Slot-6 !--->
<img id="ad"  src="https://www.club4you.net/bilder/c4y-468x60.gif"/>
<img id="ad"  src="https://coinpayu.com/static/uploads/468X60.gif"/>
<img  id="ad" src="http://waterforlife.ws/ptcsdguy468.gif"/>
<img id="ad"  src="http://waterforlife.ws/ptcsdguy468.gif"/>

</div>
<!---captcha --->


<!--- Counter starts -->
<script type="text/javascript">

//jquery 

$(document).ready(function (){
	//adcount showing ajax starts
	
	$("#count").hide();
	$("#wrn").hide();
	
	$("#wa").click(function(){
	//alert("clicked");
	 $("#quizDiv").show();
	 $("#ok").show();
    $("#count").show();
var counter="<?php echo $qwt; ?>";
var t=((1/3)*counter);
setInterval(function(){
counter--;
if (counter>=0){
id=document.getElementById("count");
id.innerHTML=counter;
if (counter<t){
	$("#wrn").show();
}
}	
if (counter===0){
	id.innerHTML="Time Over";
  	 //$("#ok").show();
	 $("#quizDiv").hide();
	 $("#count").css( "color","red");
	  $("#wa").hide();
setTimeOut(function(){
	location.reload();
},8000);
	
	
	
	
}







},1000);


	
	$("#ok").click(function(){
 
    $("#wa").hide();
   $("#ok").hide();
   $("#quizDiv").hide();
   $("#count").hide();
   $("#count").val(" ");
 
 
	$.ajax({
		url: "Reward2.php",
		type: "POST",
		data: $("#f2").serialize(),
		success: function(d){
			$('#tt2').html(d);
			//alert(d);
		
		}
		
	});


	counter=0;
	
	});
	
	
	
	});
	
	
	
    
	

	
});


</script>




