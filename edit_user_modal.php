<div class="modal" id="editUserModal<?php echo $user_id; ?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title text-white"><i class="fa fa-fw fa-user mr-2"></i><?php echo $username; ?></h5>
        <button type="button" class="close text-white" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="post.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <input type="hidden" name="current_password_hash" value="<?php echo $password; ?>">
        <div class="modal-body bg-white">    
    
          <div class="form-group">
            <label>Username <strong class="text-danger">*</strong></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
            </div>
          </div>
    
        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="edit_user" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>