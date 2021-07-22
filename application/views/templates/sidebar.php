<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="<?= base_url() ?>assets/dist/img/spk.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SPK BANSOS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <?php
      if ($user['role_id'] == 1) {
        echo ' 
        <div class="info">
        <a href="' . base_url('DataChart/profile') . '" class="d-block">Administrator </a>
      </div>
        ';
      } else {
        echo '
        <div class="info">
        <a href="' . base_url('User/profile') . '" class="d-block"> Member </a>
      </div>
        ';
      }
      ?>


    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <?php if ($user['role_id'] == 1) {
          echo

          '<li class="nav-item ">
        <a href="' . base_url('DataChart') . '" class="nav-link ">
          <i class="nav-icon fa-fw fas fa-th"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>

      <li class="nav-item">
      <a href="' . base_url('DataTraining') . '" class="nav-link">
        <i class="fas fa-fw fa-clipboard"></i>
        <p>
          Data Training
        </p>
      </a>
    </li>

    <li class="nav-item">
    <a href="' . base_url('DataUji/pengujian') . '" class="nav-link">
      <i class="fas fa-fw fa-paste"></i>
      <p>
        Pengujian
      </p>
    </a>
  </li>

  <li class="nav-item">
  <a href="' . base_url('DataUji') . '" class="nav-link">
    <i class="fas fa-fw fa-paste"></i>
    <p>
      Data Uji
    </p>
  </a>
</li>
      ';
        } else {
          echo
          '
        <li class="nav-item">
        <a href="' . base_url('User/pengujian') . '" class="nav-link">
          <i class="fas fa-fw fa-paste"></i>
          <p>
            Pengujian
          </p>
        </a>
      </li>
    
      <li class="nav-item">
      <a href="' . base_url('User') . '" class="nav-link">
        <i class="fas fa-fw fa-paste"></i>
        <p>
          Data Uji
        </p>
      </a>
    </li>
        ';
        }
        ?>


        <!-- Data Uji  -->
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>