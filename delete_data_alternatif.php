<?php 
	
	include 'koneksi.php';

	if (isset($_GET['Del'])) {
		// code...
		$id_data = $_GET['Del'];
		$query = "DELETE FROM siswa WHERE id = '".$id_data."'";
		$result = mysqli_query($conn, $query);

		if ($result) {
			// code...
			header("Location:data_alternatif.php");
		}else {
			echo "Please Check Again";
		}
	}
?>