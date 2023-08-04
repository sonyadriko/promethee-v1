<?php 
	
	include 'koneksi.php';

	if (isset($_GET['Del'])) {
		// code...
		$id_data = $_GET['Del'];
		$query = "DELETE FROM subkriteria WHERE id = '".$id_data."'";
		$result = mysqli_query($conn, $query);

		if ($result) {
			// code...
			header("Location:data_subkriteria.php");
		}else {
			echo "Please Check Again";
		}
	}
?>