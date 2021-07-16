<?php

include '../../koneksi.php';

$id_nilai = $_GET['id_nilai'];

$query = mysqli_query($con,"DELETE FROM nilai WHERE id_nilai='$id_nilai'");
if ($query) {
	echo "<script> alert ('Data nilai siswa berhasil dihapus'); window.location = 'nilai.php'; </script>";
} else {
	echo "<script> alert('System Error! Please try again!'); window.location ='nilai.php';</script>";
}

?>