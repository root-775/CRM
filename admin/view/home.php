<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card mt-5">
        <div class="card-body">
          <h5 class="card-title">Profile Info</h5>
          <p class="card-text"><span class="fa fa-user"></span>&nbsp;<?= $_SESSION['admin_u_username'] ?></p>
          <a href="index.php?controller=admin&function=editprofile" class="btn btn-primary"><span class="fa fa-edit"></span>&nbsp; Profile</a>
        </div>
      </div>
      <div class="card mt-5">
        <div class="card-body">
          <p class="card-text"><span class="fa fa-clock"></span>&nbsp; <?= date('d-m-Y') ?></p>
          <?php $this->obj->userAttendanceIn(); ?>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="jumbotron" style="width: 100%; height: 100%;">
        <h1>Welcome Admin</h1>
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
    padding: 10px;
  }

  td {
    padding-left: 10px;
  }
</style>