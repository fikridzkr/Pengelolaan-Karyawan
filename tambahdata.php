<?php

session_start();
//panggil koneksi
include "functions.php";

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
}

$username = $_SESSION['nama'];

//cek apakah tombol sudah ditekan
if (isset($_POST['tambahdata'])) {

    //cek apakah data berhasil ditambahkan
    if (tambah($_POST) > 0 ) {
        echo"
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo"
        <script>
            alert('Data Gagal Ditambahkan');
            document.location.href = 'tambahdata.php';
        </script>
        ";
    }
}   

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Pengelolaan Data Karyawan </title>
  <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php include"sidebar.php" ?>

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

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                    </div>
                </div>
                </form>
            </div>
            </li>



            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-3 d-none d-lg-inline text-gray-700 small"><?= $username ?></span>
                <i class="fas fa-user rounded-circle fa-lg"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
                </a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="logout.php"  onclick="return confirm('Apakah <?= $username ?> yakin ingin logout?')">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
                </a>
            </div>
            </li>

        </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Page Heading -->



        <!-- form add posts -->

        <div class="col-md-8 m-auto p-5 p-2">
        <h1 class="text-center"> Tambah Data Karyawan </h1>
        <form action="" method="post">
            <div class="form-group">
            <label for="nik">Nik</label>
            <input type="number" class="form-control" name="nik" required autofocus>
            </div>
            <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" required autofocus>
            </div>
            <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" required autofocus>
            </div>
            <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" required autofocus>
            </div>
            <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" required autofocuss></textarea>
            </div>
            <button type="submit" name="tambahdata" class="btn btn-info float-right">Tambah Data</button>
        </form>
    </div>
    
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-light">
        <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; fikridzkr</span>
        </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>


</body>

</html>
