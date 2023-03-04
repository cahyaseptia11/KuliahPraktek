<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Digital Library</title>  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">  
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> 
  <link rel="stylesheet" href="dist/css/adminlte.min.css">  
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"> 
  <aside class="main-sidebar sidebar-dark-primary elevation-4"> 
    <a href="home.php" class="brand-link">
      <img src="../image/logo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Islamic School</span>
    </a>    
    <div class="sidebar">      
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">               
      </div>      
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">    
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Entry Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data_anggota.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Anggota</p>
                </a>
              </li>     
              <li class="nav-item">
                <a href="data_buku.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Buku</p>
                </a>
              </li>                       
            </ul>
          </li>
          <li class="nav-header">Laporan</li>
          <li class="nav-item">
            <a href="data_anggota.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Data Anggota</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_buku.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Data Buku</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="data_transaksi.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Transaksi Peminjaman</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Logout</p>
            </a>
          </li>           
        </ul>
      </nav>      
    </div> 
  </aside>