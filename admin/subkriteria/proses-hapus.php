<?php

include '../../koneksi.php';

$id_subkriteria = $_GET['id_subkriteria'];


$query = mysqli_query($con,"DELETE FROM subkriteria WHERE id_subkriteria='$id_subkriteria'");
if ($query) {
	echo "<script> alert ('Data berhasil dihapus'); window.location = 'subkriteria.php'; </script>";
} else {
	echo "<script> alert('System Error! Please try again!'); window.location ='subkriteria.php';</script>";
}


?>