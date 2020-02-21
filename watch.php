<script type="text/javascript">

//jquery 

$(document).ready(function (){
	
	
	//adcount showing ajax starts
	setInterval(function(){
		
		$('#rahat').load("Adcount.php");
	},1000);
	
	/*
		$.ajax({
		url: "AdCount.php",
		type: "POST",
		success: function(d){
			$('#rahat').html(d);
			
		}
		
	});
	
	
	$.ajax({
		url: "Captcha.php",
		type: "POST",
		success: function(d){
			$('#count').html(d);
			
		}
		
	});
	*/
	
	

	
});
	
	</script>
<head>
<style type="text/css">
@font-face{
	
	font-family: sevenSegment;
	src: url("SevenSegment.ttf");
	
}
#t{
	font-family: sevenSegment; 
}

#count{
	font-family: sevenSegment; 
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
      <button type="button" class="btn btn-dark" id="wa" >Watch Ads</button>
    </div>
    <div class="col-sm">
     <h1 id="count"><?php echo $adwt; ?></h1>
    </div>
	
    <div class="col-sm">
      <h4 id="rahat"></h4>
	   <h2 id="tt"></h2> <h2 id="tt1"></h2> <h2 id="tt2"></h2>
    </div>
	
	<div class="col-sm">
    <form method="POST" id="f" >
<input type="hidden" name="token"  id="token"/>
<button type="button" class="btn btn-success" id="ok">Get Reward</button>
<!--<input type="submit" name="btn"  id="ok" value="Get Reward"/></input> -->
</form>
    </div>
  </div>
</div>






<br>
<!----Ad Slot-1 !--->
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
	
	
	$("#ok").hide();
	$("#count").hide();
	$("#wa").click(function(){
	//alert("clicked");
    $("#count").show();
var counter="<?php echo $adwt; ?>";
setInterval(function(){
counter--;
if (counter>=0){
id=document.getElementById("count");
id.innerHTML=counter;
}	
if (counter===0){
	id.innerHTML="COMPLETED";
  	 $("#ok").show();
	 
	//Call PHP file for showing adNext Modal
	/*
	$.ajax({
		url: "NextAds.php",
		type: "POST",
		success: function(d){
			$('#tt').html(d);
			
		}
		
	});
	
*/
	
	$("#ok").click(function(){
 
 
   $("#ok").hide();
   $("#count").hide();
   $("#count").val(" ");
 
 
	$.ajax({
		url: "Captcha.php",
		type: "POST",
		data: $("#f").serialize(),
		success: function(d){
			$('#tt2').html(d);
			
		}
		
	});


	
	
	});
	
	/*
	$.ajax({
		url: "Reward.php",
		type: "POST",
		success: function(d){
			$('#tt1').html(d);
			
		}
		
	});
	*/
	
	//ends adNext ajax call
	
}
else {
	//invisible "get reward" Button 
	//$("#ok").hide();
	
}

},1000);


	
	
	});
	
	
	
    
	

	
});


</script>



<script src="https://www.google.com/recaptcha/api.js?render=6LeOts0UAAAAAMi0mu1hGnuVd0VjjKWqWjv4wCvE"></script>
<script>

grecaptcha.ready(function() {
    grecaptcha.execute('6LeOts0UAAAAAMi0mu1hGnuVd0VjjKWqWjv4wCvE', {action: 'homepage'}).then(function(token) {
       console.log(token);
	   document.getElementById("token").value= token;
	   //alert(token);
    });
});

</script>

<!-- site: 6LeOts0UAAAAAMi0mu1hGnuVd0VjjKWqWjv4wCvE;
secret: 6LeOts0UAAAAAGDBY5vimzEgfCArxcMkhqYOOxhm ;


!-->