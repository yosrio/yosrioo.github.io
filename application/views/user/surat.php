  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user/surat') ?>">
        Jogja TV
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administrator
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="far fa-envelope"></i>
          <span>Manajemen Surat</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          User
        </div>

        <!-- Nav Item - Profile -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('user'); ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profil</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            System
          </div>

          <!-- Nav Item - Logout -->
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout') ?>">
              <i class="fas fa-fw fa-sign-out-alt"></i>
              <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          </ul>
          <!-- End of Sidebar -->

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                </button>
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('user') ?>">
                  <img class="" src="<?= base_url('assets/img/profile/jogjatv_logo.png'); ?>" style="width: 100px; height: 50px;">
                </a>
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                      <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                   <!--  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="<?= base_url('user'); ?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profil
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                      </a>
                    </div>
                  </li>

                </ul> -->

              </nav>
              <!-- End of Topbar -->

              <!-- Begin Page Content -->
              <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                <main>

                  <!-- container START -->
                  <div class="container">
                    Transaksi Surat: 
                    <p>
                      <a href="<?= base_url('Surat'); ?>" class="btn btn-success" role="button">Surat Masuk</a>
                      <a href="#" class="btn btn-info" role="button">Surat Keluar</a>
                    </p>
                    <!-- <hr class="sidebar-divider"> -->
                    <br>
                    <h3>Informasi Surat:</h3>
                    <div class="col s12 m4">
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?= base_url('assets/img/inbox.png'); ?>" style="position: center;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Jumlah Surat Masuk</h5>
                              <p class="card-text"> <?= $counts; ?> Surat Masuk</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col s12 m4">
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="<?= base_url('assets/img/outbox.png'); ?>" style="position: center;">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Jumlah Surat Keluar</h5>
                              <p class="card-text">0 Surat Masuk</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- container END -->

                </main>
                <!-- Main END -->

              </div>
              <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->