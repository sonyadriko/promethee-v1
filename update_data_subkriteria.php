<?php 

	include 'koneksi.php';

	$id_data = $_GET['id'];
	$nama = $_POST['inputnama'];
	$bobot = $_POST['inputbobot'];
	

	$query = "UPDATE subkriteria set namasub = '".$nama."', bobot = '".$bobot."' where id_sub = '".$id_data."'";
	$result = mysqli_query($conn,$query);

	if ($result) {
		// code...
		header("Location:data_subkriteria.php");
	}else {
		header('please check again');
	}
?>