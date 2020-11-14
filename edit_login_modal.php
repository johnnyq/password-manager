<div class="modal" id="editLoginModal<?php echo $login_id; ?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header text-white">
        <h5 class="modal-title"><i class="fa fa-fw fa-lock mr-2"></i><?php echo $login_name; ?></h5>
        <button type="button" class="close text-white" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="post.php" method="post" autocomplete="off">

        <div class="modal-body bg-white">  

          <div class="form-group">
            <label>Name <strong class="text-danger">*</strong></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-info-circle"></i></span>
              </div>
              <input type="text" class="form-control" name="name" placeholder="Login name" value="<?php echo $login_name; ?>" required>
            </div>
          </div>

          <div class="form-group">
            <label>URL</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-link"></i></span>
              </div>
              <input type="url" class="form-control" name="url" placeholder="Please include http://" value="<?php echo $login_url; ?>">
            </div>
          </div>
        
          <div class="form-group">
            <label>Username <strong class="text-danger">*</strong></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $login_username; ?>" required>
            </div>
          </div>
          
          <div class="form-group">
            <label>Password <strong class="text-danger">*</strong></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-lock"></i></span>
              </div>
              <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo $login_password; ?>" required>
            </div>
          </div>

        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="edit_login" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>