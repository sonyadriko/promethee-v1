<?php 

	include 'koneksi.php';

	$id_data = $_GET['id'];
	$c1 = $_POST['pc1'];
	$c2 = $_POST['pc2'];
	$c3 = $_POST['pc3'];
	$c4 = $_POST['pc4'];
	$c5 = $_POST['pc5'];
	$c6 = $_POST['pc6'];
	$c7 = $_POST['pc7'];
	$c8 = $_POST['pc8'];
	$c9 = $_POST['pc9'];

	

	$query = "INSERT INTO siswa_subkriteria (id,siswa_id,kriteria_id,value) values 
    (null, '$id_data', 1, '$c1'),
    (null, '$id_data', 2, '$c2'),
    (null, '$id_data', 3, '$c3'),
    (null, '$id_data', 4, '$c4'),
    (null, '$id_data', 5, '$c5'),
    (null, '$id_data', 6, '$c6'),
    (null, '$id_data', 7, '$c7'),
    (null, '$id_data', 8, '$c8'),
    (null, '$id_data', 9, '$c9')";
	$result = mysqli_query($conn,$query);

	if ($result) {
		// code...
		header("Location:data_penilaian.php");
	}else {
		header('please check again');
	}
?>