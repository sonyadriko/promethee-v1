<?php

    include 'koneksi.php';
 session_start();
    if (!isset($_SESSION['id_pengguna'])) {
        header("Location: login.php");
    }

    // $hasil = mysqli_query($conn, "SELECT kriteria.id, kriteria.nama, kriteria.simbol, subkriteria.nama as nama_subkriteria , subkriteria.bobot as bobot_subkriteria, subkriteria.id as subkriteria_id FROM kriteria left join subkriteria on (kriteria.id=subkriteria.kriteria_id)");

    // while ($data = mysqli_fetch_assoc($hasil)) {
	//     $datas[$data['nama']][] = $data;
    // }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Kriteria</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <style>
        th{
           color : #000000;
        }
        td{
           color : #000000;
        }
        p{
           color : #000000;
        }
        #datatable{
           color : #000000;
        }
        .dataTables_info {
            color : #000000;
        }
        .dataTable_length {
            color : #000000;

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
                   <!--  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Data Subkriteria</h6>
                            <a href="tambah_data_subkriteria.php" style="text-decoration: none; list-style: none;"><input type="button" class="btn btn-primary btn-user" name="adddata" value="Tambah Data"></a>
                              <!-- <a href="export_excel.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->

                        </div>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kriteria</th>
                                            <th>Nama Subkriteria</th>
                                            <th>Bobot</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                 

                                        <?php

                                        // $nomor = 1;
                                         $get_data = mysqli_query($conn, "select * from subkriteria RIGHT JOIN kriteria on kriteria.id = subkriteria.kriteria_id");

                                         while ($display=mysqli_fetch_array($get_data)) {
                                                // code...
                                                $id_data = $display['id'];
                                                $id_sub = $display['id_sub'];
                                                $kriteria_id = $display['nama'];
                                                $nama = $display['namasub'];
                                                $bobot = $display['bobot'];
                                        ?>
                                        <tr>
                                            <td><?php echo $kriteria_id ?></td>
                                            <td><?php echo $nama ?></td>
                                            <td><?php echo $bobot ?></td>
                                           
                                            <td> 
                                                <a href='edit_data_subkriteria.php?GetID=<?php echo $id_sub ?>' style="text-decoration: none; list-style: none;"><input type='submit' value='Edit' id='editbtn' class="btn btn-primary btn-user" ></a>
                                                <a href='delete_data_subkriteria.php?Del=<?php echo $id_sub ?>' style="text-decoration: none; list-style: none;"><input type='submit' value='Delete' id='delbtn' class="btn btn-primary btn-user" ></a>
                                            </td>
                                         
                                        </tr>
                                        <?php
                                            // $nomor++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <br>
                                <!-- <p><b>Notes</b></p>
                                <p>Rendah = 1</p>
                                <p>Tinggi = 2</p> -->

                              
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