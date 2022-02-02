<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/main_css/main.css">

<body id="page-top font-2">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar accordion"  id="accordionSidebar">
        <br>
        <a class=" d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>home">
          <div class="sidebar-brand-icon ">
          <img src="<?php echo base_url() ?>upload/setting/<?php echo $settings_app[0]->setting_logo ?>" height="100">
          </div>
        </a>
      
      <!-- Nav Item - Dashboard -->
      <br>
      <hr class="sidebar-divider d-none d-md-block white">
      <div class="sidebar-title">
          MASTER
      </div>
      <li class="nav-item">
        <a class="nav-link color-1" href="<?php echo base_url() ?>home">
          <span>Dashboard</span></a>
      </li>

      <?php if ($this->session->userdata('group_id') == 1) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('mahasiswa') ?>">
            <span>Mahasiswa</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('dosen') ?>">
            <span>Dosen</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('proposal') ?>">
            <span>Proposal</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('plagiarisme') ?>">
            <span>Cek Plagiarisme</span>
          </a>
        </li>  
        <hr class="sidebar-divider d-none d-md-block">
        
        <div class="sidebar-title">
          SETTING
        </div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataUmum" aria-expanded="true" aria-controls="dataUmum">
            <span>Lainnya</span>
          </a>
          <div id="dataUmum" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

              <!-- <a class="collapse-item" href="<?php echo site_url('group') ?>">Group</a> -->
              <a class="collapse-item" href="<?php echo site_url('user') ?>">List Pengguna</a>
              <a class="collapse-item" href="<?php echo site_url('about') ?>">About us</a>
            </div>
          </div>
        </li>
      <?php } ?>
      
      <?php if ($this->session->userdata('group_id') == 3) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('proposal') ?>">
            <span>Upload Proposal</span></a>
        </li>
        <div class="sidebar-title">
          SETTING
        </div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataUmum" aria-expanded="true" aria-controls="dataUmum">
            <span>Lainnya</span>
          </a>
          <div id="dataUmum" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="<?php echo site_url('about') ?>">About us</a>
            </div>
          </div>
        </li>
      <?php } ?>

      <?php if ($this->session->userdata('group_id') == 2) { ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('plagiarisme') ?>">
            <i class="fa fa-fw fa-search"></i>
            <span>Cek Plagiarisme</span>
          </a>
        </li> 
        <hr class="sidebar-divider d-none d-md-block">
        
        <div class="sidebar-title">
          SETTING
        </div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataUmum" aria-expanded="true" aria-controls="dataUmum">
            <span>Lainnya</span>
          </a>
          <div id="dataUmum" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="<?php echo site_url('about') ?>">About us</a>
            </div>
          </div>
        </li>
      <?php } ?>

      
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <div id="content-wrapper" style="background-color:#fff" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php if ($this->session->userdata('user_photo') != "") { ?>
                  <img class="img-profile rounded-circle" src="<?php echo base_url() ?>upload/user/<?php echo $this->session->userdata('user_photo'); ?>" style="border-radius: 50%" alt="User profile picture" height="200">
                <?php } else { ?>
                  <img class="img-profile rounded-circle" src="<?php echo base_url() ?>upload/user/default_image.png" style="border-radius: 50%" alt="User profile picture" height="200">
                <?php } ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo site_url('user/profile') ?>">
                  <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile 
                </a>
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo site_url('home/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fa fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->