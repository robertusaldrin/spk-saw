<?php
include '../../koneksi.php';

$id_subkriteria = $_POST['id_subkriteria'];
$subkriteria = $_POST['subkriteria'];
$nilai = $_POST['nilai'];

if ($nilai=='1') {
	$query = mysqli_query($con,"UPDATE subkriteria SET subkriteria='$subkriteria', nilai='$nilai' WHERE id_subkriteria='$id_subkriteria'");
		if($query){
		    echo "<script> alert('Sub Kriteria berhasil diubah'); window.location ='subkriteria.php';</script>";
		} else {
		    echo "<script> alert('System Error! Please try again!'); window.location ='subkriteria.php';</script>";
		}
} elseif ($nilai=='2') {
	$query = mysqli_query($con,"UPDATE subkriteria SET subkriteria='$subkriteria', nilai='$nilai' WHERE id_subkriteria='$id_subkriteria'");
		if($query){
		    echo "<script> alert('Sub Kriteria berhasil diubah'); window.location ='subkriteria.php';</script>";
		} else {
		    echo "<script> alert('System Error! Please try again!'); window.location ='subkriteria.php';</script>";
		}
} elseif ($nilai=='3') {
	$query = mysqli_query($con,"UPDATE subkriteria SET subkriteria='$subkriteria', nilai='$nilai' WHERE id_subkriteria='$id_subkriteria'");
		if($query){
		    echo "<script> alert('Sub Kriteria berhasil diubah'); window.location ='subkriteria.php';</script>";
		} else {
		    echo "<script> alert('System Error! Please try again!'); window.location ='subkriteria.php';</script>";
		}
} elseif ($nilai=='4') {
	$query = mysqli_query($con,"UPDATE subkriteria SET subkriteria='$subkriteria', nilai='$nilai' WHERE id_subkriteria='$id_subkriteria'");
		if($query){
		    echo "<script> alert('Sub Kriteria berhasil diubah'); window.location ='subkriteria.php';</script>";
		} else {
		    echo "<script> alert('System Error! Please try again!'); window.location ='subkriteria.php';</script>";
		}
}

?>