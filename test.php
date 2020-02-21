<body>
<div align="center" style="font-size:20px;color:#FA34DA">Registration closes in <span id="time">00:35</span> minutes!</div>
Registration closes in <span id="timer">05:00<span> minutes!
<script >





window.onload = function() {
  var hour = 0;
  var sec = 10;
 
  setInterval(function() {
    document.getElementById("timer").innerHTML = hour + " : " + sec;
    sec--;
    
  }, 1000);
  
 
  
  window.stop();
}

</script>

    

</body>