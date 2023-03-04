<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Digital Library</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>    
    <section class="content" style="margin: 100px; ">  
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Form Login Digital Library</h3>
        </div>      
        <form class="form-horizontal" method="POST" action="cek_login.php">
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-sm-2 col-sm-10">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck2">
                  <label class="form-check-label" for="exampleCheck2">Remember me</label>
                </div>
              </div>
            </div>
          </div>          
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Sign in</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
          </div>          
        </form>
      </div>      
    </section>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
