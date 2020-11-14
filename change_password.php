<?php include("header.php"); ?>

<div class="card mb-3">
  <div class="card-header bg-dark text-white">
    <h6 class="float-left mt-1"><i class="fa fa-fw fa-key mr-2"></i> Change Password</h6>
  </div>
  <div class="card-body">
    <form action="post.php" method="post" autocomplete="off">
      <div class="input-group">
        <input type="password" class="form-control col-md-4" name="password" value="<?php echo $session_password ?>">
        <div class="input-group-append">
          <button type="submit" name="change_password" class="btn btn-primary">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php include("footer.php");