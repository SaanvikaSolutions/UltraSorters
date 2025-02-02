  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <!-- <img src="assets/dist/img/user.png" alt="No Source" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">COMAAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./about_us.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View About</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./products.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Products</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Facilities
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Facilities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Facilities</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./gallery.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Gallery</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Career 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./career.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Career</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Contact Us
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./view_contact.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact Us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Testimonials
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./testimonials.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Testimonials</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Technologies
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./technologies.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Technologies</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Product Specification
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./product_specification_table.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> View Specification</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Basic Details
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./basic_details.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> View Basic Details</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="sign_up.php" class="nav-link">
              <!-- <i class="fa fa-registered left" aria-hidden="true"></i> -->
              <p>
                Register User
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="./logout.php" class="nav-link">
              <!-- <i class="fa fa-registered left" aria-hidden="true"></i> -->
              <p>
                Log Out
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>

          <!-- <li class="nav-header">MISCELLANEOUS</li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>