<?php 

	include 'koneksi.php';

	$id_data = $_GET['id'];
	$nama = $_POST['inputnama'];
	$simbol = $_POST['inputsimbol'];
	

	$query = "UPDATE kriteria set nama = '".$nama."', simbol = '".$simbol."' where id = '".$id_data."'";
	$result = mysqli_query($conn,$query);

	if ($result) {
		// code...
		header("Location:data_kriteria.php");
	}else {
		header('please check again');
	}
?>