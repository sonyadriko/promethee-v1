<?php

    include 'koneksi.php';
 session_start();
    if (!isset($_SESSION['id_pengguna'])) {
        header("Location: login.php");
    }

    $id_data = $_GET['GetID'];

    // $query = mysqli_query($conn, "SELECT * FROM kriteria WHERE id = '".$id_data."'");
    // while($row = mysqli_fetch_assoc($query)){
    //     $nama = $row['nama'];
    //     $simbol = $row['simbol'];
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

    <title>Edit Data Kriteria</title>

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
                    <h1 class="h3 mb-2 text-gray-800">Edit Data Penilaian</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div>
                                    <div>
                                        <div class="p-5">
                                            <form method="POST" action="update_data_penilaian.php?id=<?php echo $id_data ?>">
                                                <table border="0" cellpadding="10" cellspacing="0">
                                                    <tr>
                                                        <td>Pekerjaan orang tua : </td>
                                                        <!-- <td><input type="text" name="inputnama" class="form-control form-control-user" id="exampleAge" value="<?php echo $nama ?>" style="-moz-appearance: textfield; " required></td> -->
                                                        <td><select name="pc1" id="pc1">
                                                            <option disabled selected>Pilih</option>
                                                            <?php
                                                            $sql1 = mysqli_query($conn, "SELECT * From subkriteria where kriteria_id=1");
                                                            if (mysqli_num_rows($sql1) > 0) {
                                                            while($data=mysqli_fetch_assoc($sql1)){
                                                                echo '<option value="' . $data['id'] . '">' . $data['namasub'] . '</option>';
                                                            }
                                                        }
                                                            ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Penghasilan orang tua : </td>
                                                        <td><select name="pc2" id="pc2">
                                                            <option disabled selected>Pilih</option>
                                                            <?php
                                                            $sql1 = mysqli_query($conn, "SELECT * From subkriteria where kriteria_id=2");
                                                            if (mysqli_num_rows($sql1) > 0) {
                                                            while($data=mysqli_fetch_assoc($sql1)){
                                                                echo '<option value="' . $data['id'] . '">' . $data['namasub'] . '</option>';
                                                            }
                                                        }
                                                            ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pendidikan orang tua : </td>
                                                        <td><select name="pc3" id="pc3">
                                                            <option disabled selected>Pilih</option>
                                                            <?php
                                                            $sql1 = mysqli_query($conn, "SELECT * From subkriteria where kriteria_id=3");
                                                            if (mysqli_num_rows($sql1) > 0) {
                                                            while($data=mysqli_fetch_assoc($sql1)){
                                                                echo '<option value="' . $data['id'] . '">' . $data['namasub'] . '</option>';
                                                            }
                                                        }
                                                            ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Data Rapot : </td>
                                                        <td><select name="pc4" id="pc4">
                                                            <option disabled selected>Pilih</option>
                                                            <?php
                                                            $sql1 = mysqli_query($conn, "SELECT * From subkriteria where kriteria_id=4");
                                                            if (mysqli_num_rows($sql1) > 0) {
                                                            while($data=mysqli_fetch_assoc($sql1)){
                                                                echo '<option value="' . $data['id'] . '">' . $data['namasub'] . '</option>';
                                                            }
                                                        }
                                                            ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status anak : </td>
                                                        <td><select name="pc5" id="pc5">
                                                            <option disabled selected>Pilih</option>
                                                            <?php
                                                            $sql1 = mysqli_query($conn, "SELECT * From subkriteria where kriteria_id=5");
                                                            if (mysqli_num_rows($sql1) > 0) {
                                                            while($data=mysqli_fetch_assoc($sql1)){
                                                                echo '<option value="' . $data['id'] . '">' . $data['namasub'] . '</option>';
                                                            }
                                                        }
                                                            ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Rumah : </td>
                                                        <td><select name="pc6" id="pc6">
                                                            <option disabled selected>Pilih</option>
                                                            <?php
                                                            $sql1 = mysqli_query($conn, "SELECT * From subkriteria where kriteria_id=6");
                                                            if (mysqli_num_rows($sql1) > 0) {
                                                            while($data=mysqli_fetch_assoc($sql1)){
                                                                echo '<option value="' . $data['id'] . '">' . $data['namasub'] . '</option>';
                                                            }
                                                        }
                                                            ?>
                                                        </select></td>                                                    </tr>
                                                    <tr>
                                                        <td>Data PKH : </td>
                                                        <td><select name="pc7" id="pc7">
                                                            <option disabled selected>Pilih</option>
                                                            <?php
                                                            $sql1 = mysqli_query($conn, "SELECT * From subkriteria where kriteria_id=7");
                                                            if (mysqli_num_rows($sql1) > 0) {
                                                            while($data=mysqli_fetch_assoc($sql1)){
                                                                echo '<option value="' . $data['id'] . '">' . $data['namasub'] . '</option>';
                                                            }
                                                        }
                                                            ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Data SKTM : </td>
                                                        <td><select name="pc8" id="pc8">
                                                            <option disabled selected>Pilih</option>
                                                            <?php
                                                            $sql1 = mysqli_query($conn, "SELECT * From subkriteria where kriteria_id=8");
                                                            if (mysqli_num_rows($sql1) > 0) {
                                                            while($data=mysqli_fetch_assoc($sql1)){
                                                                echo '<option value="' . $data['id'] . '">' . $data['namasub'] . '</option>';
                                                            }
                                                        }
                                                            ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sumber penerangan : </td>
                                                        <td><select name="pc9" id="pc9">
                                                            <option disabled selected>Pilih</option>
                                                            <?php
                                                            $sql1 = mysqli_query($conn, "SELECT * From subkriteria where kriteria_id=9");
                                                            if (mysqli_num_rows($sql1) > 0) {
                                                            while($data=mysqli_fetch_assoc($sql1)){
                                                                echo '<option value="' . $data['id'] . '">' . $data['namasub'] . '</option>';
                                                            }
                                                        }
                                                            ?>
                                                        </select></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="data_penilaian.php" style="text-decoration: none; list-style: none;"><input type="button" class="btn btn-primary btn-user btn-block" name="back" value="Back"></a></td>
                                                        <td><input type="submit" class="btn btn-primary btn-user btn-block" name="submit" value="Submit"></td>
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