<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 d-print-none">
  
  <!-- Brand Logo -->
  <h5>
  <a href="index.php" class="brand-link">
    <span class="brand-text font-weight-light"><i class="fa fa-key"></i> Password Manager</span>
  </a>
</h5>
  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <li class="nav-item">
          <a href="logins.php" class="nav-link <?php if(basename($_SERVER["PHP_SELF"]) == "logins.php") { echo "active"; } ?>">
            <i class="nav-icon fas fa-globe"></i>
            <p>Web Logins</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="local_logins.php" class="nav-link <?php if(basename($_SERVER["PHP_SELF"]) == "local_logins.php") { echo "active"; } ?>">
            <i class="nav-icon fas fa-mobile-alt"></i>
            <p>Device Logins</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="local_logins.php" class="nav-link <?php if(basename($_SERVER["PHP_SELF"]) == "local_logins.php") { echo "active"; } ?>">
            <i class="nav-icon fas fa-wifi"></i>
            <p>WiFi Logins</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="notes.php" class="nav-link <?php if(basename($_SERVER["PHP_SELF"]) == "notes.php") { echo "active"; } ?>">
            <i class="nav-icon fas fa-credit-card"></i>
            <p>Credit Cards</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="notes.php" class="nav-link <?php if(basename($_SERVER["PHP_SELF"]) == "notes.php") { echo "active"; } ?>">
            <i class="nav-icon fas fa-id-card"></i>
            <p>Identities</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="notes.php" class="nav-link <?php if(basename($_SERVER["PHP_SELF"]) == "notes.php") { echo "active"; } ?>">
            <i class="nav-icon fas fa-edit"></i>
            <p>Notes</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="notes.php" class="nav-link <?php if(basename($_SERVER["PHP_SELF"]) == "notes.php") { echo "active"; } ?>">
            <i class="nav-icon fas fa-share-alt"></i>
            <p>Shared</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="users.php" class="nav-link <?php if(basename($_SERVER["PHP_SELF"]) == "users.php") { echo "active"; } ?>">
            <i class="nav-icon fas fa-users"></i>
            <p>Users</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>