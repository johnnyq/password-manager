<div class="modal" id="addLoginModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header text-white">
        <h5 class="modal-title"><i class="fa fa-fw fa-lock mr-2"></i>New Login</h5>
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
              <input type="text" class="form-control" name="name" placeholder="Name of the login" required autofocus>
            </div>
          </div>

          <div class="form-group">
            <label>Web Link</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-link"></i></span>
              </div>
              <input type="url" class="form-control" name="url" placeholder="Please include https://">
            </div>
          </div>
        
          <div class="form-group">
            <label>Username <strong class="text-danger">*</strong></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
          </div>
          
          <div class="form-group">
            <label>Password <strong class="text-danger">*</strong></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-lock"></i></span>
              </div>
              <input type="text" class="form-control" name="password" placeholder="Password" required>
            </div>
          </div>

        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="add_login" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>