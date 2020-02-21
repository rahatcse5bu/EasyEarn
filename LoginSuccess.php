

<div id="LoginSuccessModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="text-success">Login Success! You will be redirected to your dashboard  within 8 seconds!</div>
			
		</div>
	</div>
</div>     
<script>$('#LoginSuccessModal').modal('show');
setTimeout(function(){
            window.location.href = 'logged.php';
         }, 8000);

</script>

