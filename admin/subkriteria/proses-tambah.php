<?php
include '../../koneksi.php';

$id_kriteria = $_POST['id_kriteria'];
$subkriteria = $_POST['subkriteria'];
$nilai = $_POST['nilai'];


if ($nilai=='1') {
	$query = mysqli_query($con,"INSERT INTO subkriteria(id_kriteria,subkriteria,nilai)
							VALUES('$id_kriteria','$subkriteria','$nilai')");
		if($query){
		    echo "<script> alert('Data berhasil disimpan'); window.location ='subkriteria.php';</script>";
		} else {
		    echo "<script> alert('System Error! Please try again!'); window.location ='subkriteria.php';</script>";
		}
} elseif ($nilai=='2') {
	$query = mysqli_query($con,"INSERT INTO subkriteria(id_kriteria,subkriteria,nilai)
							VALUES('$id_kriteria','$subkriteria','$nilai')");
		if($query){
		    echo "<script> alert('Data berhasil disimpan'); window.location ='subkriteria.php';</script>";
		} else {
		    echo "<script> alert('System Error! Please try again!'); window.location ='subkriteria.php';</script>";
		}
} elseif ($nilai=='3') {
	$query = mysqli_query($con,"INSERT INTO subkriteria(id_kriteria,subkriteria,nilai)
							VALUES('$id_kriteria','$subkriteria','$nilai')");
		if($query){
		    echo "<script> alert('Data berhasil disimpan'); window.location ='subkriteria.php';</script>";
		} else {
		    echo "<script> alert('System Error! Please try again!'); window.location ='subkriteria.php';</script>";
		}
} elseif ($nilai=='4') {
	$query = mysqli_query($con,"INSERT INTO subkriteria(id_kriteria,subkriteria,nilai)
							VALUES('$id_kriteria','$subkriteria','$nilai')");
		if($query){
		    echo "<script> alert('Data berhasil disimpan'); window.location ='subkriteria.php';</script>";
		} else {
		    echo "<script> alert('System Error! Please try again!'); window.location ='subkriteria.php';</script>";
		}
}


?>