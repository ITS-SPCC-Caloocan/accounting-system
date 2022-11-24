<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#" target="_blank">
      <img src="<?php echo base_url('assets/img/spcc-logo.png'); ?>" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold">SPCC | Accounting System</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php echo $title == 'Dashboard' ? 'active' : ''; ?>" href="<?php echo base_url(); ?>">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $title == 'Orders' ? 'active' : ''; ?>" href="orders">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Orders</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $title == 'Inventory' ? 'active' : ''; ?>" href="inventory">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Inventory</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $title == 'Accounts' ? 'active' : ''; ?>" href="accounts">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-app text-info text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Accounts</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $title == 'Reports' ? 'active' : ''; ?>" href="reports">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Reports</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidenav-footer mx-3 ">
    <div class="card card-plain shadow-none" id="sidenavCard">
      <img class="w-50 mx-auto" src="<?php echo base_url('assets/img/illustrations/icon-documentation.svg'); ?>" alt="sidebar_illustration">
      <div class="card-body text-center p-3 w-100 pt-0">
        <div class="docs-info">
          <h6 class="mb-0">Need help?</h6>
          <p class="text-xs font-weight-bold mb-0">Contact us at</p>
        </div>
      </div>
    </div>
    <a href="#" class="btn btn-dark btn-sm w-100 mb-3">Email</a>
  </div>
</aside>