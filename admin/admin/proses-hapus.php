<?php
session_start();
include '../../koneksi.php';

$id_admin = $_GET['id_admin'];


if ($id_admin != $_SESSION['id_admin']) {
	echo "<script> alert('Dilarang menghapus data admin lain!'); window.location ='admin.php';</script>";
} else {
	$query = mysqli_query($con,"DELETE FROM admin WHERE id_admin='$id_admin'");
		if ($query) {
			echo "<script> alert ('Data admin berhasil dihapus'); window.location = '../../logout.php'; </script>";
		} else {
			echo "<script> alert('System Error! Please try again!'); window.location ='admin.php';</script>";
		}
}

?>