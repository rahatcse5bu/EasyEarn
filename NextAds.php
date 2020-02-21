<div class="modal fade" id="nextAdsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLabel">Great Job</h1>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
          <div class="text-success">
           <h3> You Have Been Credited with <?php include "Get.php"; echo $aup; ?>  Watch Another Next Ad  </h3>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" name="w">Ok </button>
      </div>
    </div>
  </div>
</div>
<script>
$('#nextAdsModal').modal('show')

</script>