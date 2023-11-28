<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card mt-5">

        <div class="card-body">
          <h5 class="card-title">Profile Info</h5>
          <p class="card-text"><span class="fas fa-user-shield"></span>&nbsp;<?= $_SESSION['superadmin_u_username'] ?></p>

          <a href="index.php?controller=superadmin&function=editprofile" class="btn btn-primary"><span class="fa fa-edit"></span>&nbsp; Profile</a>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="jumbotron" style="width: 100%; height: 100%;">
        <h1><i class="fas fa-user-shield"></i> SuperAdmin</h1>
        <div class="row">
          <div class="col-sm-6 text-center">
            <?php include_once('clock.php'); ?>
          </div>
          <div class="col-sm-6">
              <h3><?= date('j-F-Y');  ?> </h3>
          </div>
        </div>
      </div>

    </div>

  </div>
</div>


<style>
  th {
    white-space: nowrap;
    padding-right: 10px;
  }
</style>