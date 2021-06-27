  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
          <div class="sidebar-brand-icon">
              <img src="<?= base_url('assets') ?>/img/kemenag.png" style="width: 50px;">
          </div>
          <div class="sidebar-brand-text mx-3">PERURATAN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Admin
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('surat/index') ?>">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Surat
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesurat" aria-expanded="true" aria-controls="collapsesurat">
              <i class="fas fa-arrow-alt-circle-down"></i>
              <span>Buat Surat</span>
          </a>
          <div id="collapsesurat" class="collapse" aria-labelledby="headingone data-parent=" #accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="<?= base_url(); ?>surat/tambah">Buat</a>
              </div>
          </div>
      </li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <i class="fas fa-arrow-alt-circle-down"></i>
              <span>Surat masuk</span>
          </a>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Surat Masuk:</h6>
                  <a class="collapse-item" href="buttons.html">Pemerintah</a>
                  <a class="collapse-item" href="cards.html">Masyarakat</a>
              </div>
          </div>
      </li>

      <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-arrow-alt-circle-up"></i>
              <span>Surat keluar</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Surat Keluar:</h6>
                  <a class="collapse-item" href="buttons.html">Pemerintah</a>
                  <a class="collapse-item" href="cards.html">Masyarakat</a>
              </div>
          </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
          Lain Lain
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
          <a class="nav-link" href="charts.html">
              <i class="fas fa-book"></i>
              <span>Berkas</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

  </ul>
  <!-- End of Sidebar -->