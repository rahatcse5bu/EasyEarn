<html><body>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Balance Section</h4>
  <p>Here You will be shown your current balance,life-time balance,your refer income </p>
  <hr>
  <p class="mb-0">If you want to see the statistics of the ads you viewed, you can do that by choosing the "Statistics" section in the menubar</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
     <!--- One of three columns --->
    </div>


<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Your Current Balance :
    <span class="badge badge-primary badge-pill"> <?php include"database.php"; echo $bal_now; ?></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Your Life-Time Income :
    <span class="badge badge-primary badge-pill"> <?php include"database.php"; echo $bal_total; ?></span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Income From Your Refer :
    <span class="badge badge-primary badge-pill"> <?php include "referIncome.php"; ?></span>
  </li>
</ul>








    <div class="col-sm">
    <!---  One of three columns --->
    </div>
  </div>
</div>



































</body></html>