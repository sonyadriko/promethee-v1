<?php 

	include 'koneksi.php';

	$id_data = $_GET['id'];
    $kode = $_POST['inputkode'];
    $nisn = $_POST['inputnisn'];
    $kelas = $_POST['inputkelas'];
    $nama = strtoupper($_POST['inputnama']);
    $tanggallahir = $_POST['inputtanggallahir'];
    $tempatlahir = $_POST['inputtempatlahir'];
    $namaibu = strtoupper($_POST['inputnamaibu']);
	

	$query = "UPDATE siswa set 
    kode = '".$kode."', 
    nisn = '".$nisn."', 
    nama = '".$nama."', 
    kelas = '".$kelas."', 
    tanggal_lahir = '".$tanggallahir."', 
    tempat_lahir = '".$tempatlahir."',
    nama_ibu = '".$namaibu."'
    where id = '".$id_data."'";
	$result = mysqli_query($conn,$query);

	if ($result) {
		// code...
		header("Location:data_alternatif.php");
	}else {
		header('please check again');
	}
?>