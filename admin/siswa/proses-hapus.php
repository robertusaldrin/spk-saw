<?php

include '../../koneksi.php';

$id_siswa = $_GET['id_siswa'];

$query = mysqli_query($con,"DELETE FROM siswa WHERE id_siswa='$id_siswa'");
if ($query) {
	echo "<script> alert ('Data siswa berhasil dihapus'); window.location = 'siswa.php'; </script>";
} else {
	echo "<script> alert('System Error! Please try again!'); window.location ='siswa.php';</script>";
}

?>