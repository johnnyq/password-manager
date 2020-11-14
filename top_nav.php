<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-primary navbar-dark">

  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  
  <!-- SEARCH FORM -->
  <form class="form-inline ml-auto mr-5" action="clients.php">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" name="q">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <!-- Right navbar links -->
  <ul class="navbar-nav">
    
    <li class="nav-item dropdown user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
        <span class="d-none d-md-inline"><?php echo $session_username; ?></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <!-- User image -->
        <li class="user-header bg-gray-dark">
          <p>
            <?php echo $session_username; ?>
          </p>
        </li>
        
        <!-- Menu Footer-->
        <li class="user-footer">
          <a href="change_password.php" class="btn btn-default btn-flat">Change Password</a>
          <a href="logout.php" class="btn btn-default btn-flat float-right">Sign out</a>
        </li>
      </ul>
    </li>
    
  </ul>
</nav>
<!-- /.navbar -->