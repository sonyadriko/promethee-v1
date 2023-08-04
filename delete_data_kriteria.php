<?php 
	
	include 'koneksi.php';

	if (isset($_GET['Del'])) {
		// code...
		$id_datakriteria = $_GET['Del'];
		$query = "DELETE FROM kriteria WHERE id = '".$id_datakriteria."'";
		$result = mysqli_query($conn, $query);

		if ($result) {
			// code...
			header("Location:data_kriteria.php");
		}else {
			echo "Please Check Again";
		}
	}
?>