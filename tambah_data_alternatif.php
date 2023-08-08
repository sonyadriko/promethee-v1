<?php

include 'koneksi.php';
session_start();
   if (!isset($_SESSION['id_pengguna'])) {
       header("Location: login.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Tambah Data Alternatif</title>
   <!-- Custom fonts for this template -->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style type="text/css">
        .inputage {
             list-style: none;
        }
    </style>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

         <?php include 'sidebar.php' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              <?php include 'topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Alternatif</h1>
                  <!--   <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
 -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-12 col-md-9">
                                    <div class="col-lg-12">
                                        <div class="p-1">
                                            <form method="POST" action="tambah_data_alternatif.php">
                                                <table border="0" cellpadding="10" cellspacing="0">
                                                <tr>
                                                        <td>Kode : </td>
                                                        <td><input type="text" name="inputkode" class="form-control form-control-user" id="exampleAge" style="-moz-appearance: textfield; " required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>NISN : </td>
                                                        <td><input type="number" name="inputnisn" class="form-control form-control-user" id="exampleYear" style="-moz-appearance: textfield;" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kelas : </td>
                                                        <td><input type="text" name="inputkelas" class="form-control form-control-user" id="exampleYear" style="-moz-appearance: textfield;" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama : </td>
                                                        <td><input type="text" name="inputnama" class="form-control form-control-user" id="exampleYear" style="-moz-appearance: textfield;" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir : </td>
                                                        <td><input type="date" name="inputtanggallahir" class="form-control form-control-user" id="exampleYear" style="-moz-appearance: textfield;" required></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir : </td>
                                                        <td><input type="text" name="inputtempatlahir" class="form-control form-control-user" id="exampleYear" style="-moz-appearance: textfield;" required></td>
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                        <td>Nama Ibu : </td>
                                                        <td><input type="text" name="inputnamaibu" class="form-control form-control-user" id="exampleYear" style="-moz-appearance: textfield;" required></td>
                                                    </tr>
                                                        <td><a href="data_alternatif.php" style="text-decoration: none; list-style: none;"><input type="button" class="btn btn-primary btn-user btn-block" name="back" value="Back"></a></td>
                                                        <td><input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Tambah"></td>
                                                    </tr>
                                                </table>
                                               
                                                <br>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'footer.php' ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php
        include 'logout_modal.php';
    ?>

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

<?php
        if (isset($_POST['submit'])) {
            // code...
            $kode = $_POST['inputkode'];
            $nisn = $_POST['inputnisn'];
            $kelas = $_POST['inputkelas'];
            $nama = strtoupper($_POST['inputnama']);
            $tanggallahir = $_POST['inputtanggallahir'];
            $tempatlahir = $_POST['inputtempatlahir'];
            $namaibu = strtoupper($_POST['inputnamaibu']);

            
            $insertData = "INSERT INTO siswa
                    (`id`, `kode`, `nisn`, `kelas`, `nama`, `tanggal_lahir`, `tempat_lahir`, `nama_ibu`) VALUES (NULL, '$kode', $nisn, '$kelas', '$nama', '$tanggallahir', '$tempatlahir', '$namaibu')";
            $insertResult = mysqli_query($conn, $insertData);

            if ($insertResult) {
                // code...
                echo "<script>alert('Berhasil menambah data alternatif.')</script>";
                 header("Location:index.php");
            }else {
                var_dump($insertResult);

            }
        }
?>