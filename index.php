<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendaftaran Uji KIR (Uji Kendaraan Bermotor) | Dinas Perhubungan Kabupaten Banjarnegara</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <img src="img/dephub.png" width="50px">
                <div class="sidebar-brand-text mx-3">Dashboard Uji KIR</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Tambah Jadwal -->
            <li class="nav-item">
                <a class="nav-link" href="add.php">
                    <i class="fas fa-plus"></i>
                    <span>Tambah Jadwal Uji KIR</span></a>
            </li>

            <!-- Nav Item - Tambah Jadwal -->
            <li class="nav-item">
                <a class="nav-link" href="admin">
                    <i class="fas fa-user"></i>
                    <span>Login Admin Sistem Uji KIR</span></a>
            </li>

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
                <br/>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Jadwal Uji KIR Dinas Perhubungan Kabupaten Banjarnegara</h1>
                    <p class="mb-4">Uji KIR dilakukan maskimal 5 peserta dalam sehari</p>
                    <a href="add.php" class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Jadwal Uji KIR</span>
                    </a>
                    <br/>
                    <br/>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIK</th> <th>Nama</th> <th>Alamat</th> <th>No HP</th> <th>No Polisi</th> <th>Jenis Kendaraan</th> <th>Merk & Tipe Kendaraan</th> <th>Tahun Pembuatan</th> <th>Tanggal Uji KIR</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NIK</th> <th>Nama</th> <th>Alamat</th> <th>No HP</th> <th>No Polisi</th> <th>Jenis Kendaraan</th> <th>Merk & Tipe Kendaraan</th> <th>Tahun Pembuatan</th> <th>Tanggal Uji KIR</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php  
                                            while($user_data = mysqli_fetch_array($result)) {         
                                                echo "<tr>";
                                                echo "<td>".$user_data['nik']."</td>";
                                                echo "<td>".$user_data['name']."</td>";
                                                echo "<td>".$user_data['address']."</td>";    
                                                echo "<td>".$user_data['mobile']."</td>";
                                                echo "<td>".$user_data['policenumber']."</td>";
                                                echo "<td>".$user_data['vehicle']."</td>";    
                                                echo "<td>".$user_data['type']."</td>";
                                                echo "<td>".$user_data['yearscreated']."</td>";
                                                echo "<td>".$user_data['date']."</td>";    
                                                echo "</tr>";        
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dinhub Banjarnegara 2020</span>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>