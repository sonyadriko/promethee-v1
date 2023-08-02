<?php

	include 'koneksi.php';

	session_start();

	if (isset($_SESSION['id_pengguna'], $_SESSION['nama'])) {
    header("Location: index.php");
	}
	
	if (isset($_POST['login'])) {
		// code...
		$username = ($_POST['username']);
		$password = (md5($_POST['password']));

		$query2 = "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'";
		$result = $conn->query($query2);

		if ($result->num_rows >= 1){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['id_pengguna'] = $row['id_pengguna'];
			$_SESSION['nama'] = $row['nama'];

			header("Location:index.php");
		}else {
			
			echo "User tidak ada!";
		}
	}

?>