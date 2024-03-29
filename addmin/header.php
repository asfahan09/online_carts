<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin panell</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="index.php" class="text-nowrap logo-img">
            <!-- <img src="assets/images/logos/dark-logo.svg" width="180" alt="" /> -->
            <h1 class="text-primary">Admin panel</h1>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">edit</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="table.php" aria-expanded="false">
                
                <span class="hide-menu">profile</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="contactus_table.php" aria-expanded="false">
                
                <span class="hide-menu">contact us </span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Add product</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="product.php" aria-expanded="false">
                
                <span class="hide-menu">product </span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="product_table.php" aria-expanded="false">
                
                <span class="hide-menu">Show table </span>
              </a>

            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"> product category</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="smart_watches.php" aria-expanded="false">
                
                <span class="hide-menu">smart watches </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="smart_phone.php" aria-expanded="false">
                
                <span class="hide-menu">smart phone </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="airbuds.php" aria-expanded="false">
                
                <span class="hide-menu">Airbuds </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="hoodie.php" aria-expanded="false">
                
                <span class="hide-menu">hoodie </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="shoes.php" aria-expanded="false">
                
                <span class="hide-menu">shoes </span>
              </a>
            </li>

            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">order</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="purchase_table.php" aria-expanded="false">
                
                <span class="hide-menu"> order detail</span>
              </a>
            </li>
          </ul>
        
        </nav>
        </div>
    </aside>
        <!-- End Sidebar navigation -->
    
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <!-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> -->
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->