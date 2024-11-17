<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <span class="brand-image img-circle elevation-1" style="opacity: .8;padding: 4%;"><?php echo substr(CONFIG("APP_NAME"), 0, 1); ?></span>
    <span class="brand-text font-weight-light"><?php echo CONFIG("APP_NAME"); ?></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-2 pb-3 mb-2 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="info">
        <a href="profile.php" class="d-block"><?php echo auth("FullName"); ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?view=Services" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Services
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?view=Veritcals" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Verticales
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?view=Projects" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Projects
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?view=Blogs" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Blogs
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="?view=HomePage" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?view=HomePage" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Home Page</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?view=CompanyProfile" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Company Profile</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-gears"></i>
            <p>
              Website Settings
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="?view=Sliders" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sliders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="?view=ContactDetails" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Contact Details</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="?view=Social Links" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Socail Links</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="index.php?view=Enquiry" class="nav-link">
            <i class="nav-icon fas fa-bell"></i>
            <p>
              Enquiries
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?view=CV Received" class="nav-link">
            <i class="nav-icon fas fa-graduation-cap"></i>
            <p>
              CV Received
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="index.php?view=Profile" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Profile
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="../action/logout.php" class="nav-link">
            <i class="nav-icon fas fa-unlock"></i>
            <p>
              logout
            </p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>