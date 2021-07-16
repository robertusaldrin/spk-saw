<?php
include '../../koneksi.php';

$id_siswa = $_POST['id_siswa'];
$c1 = $_POST['c1']; $c2 = $_POST['c2']; $c3 = $_POST['c3']; $c4 = $_POST['c4']; $c5 = $_POST['c5'];
$c6 = $_POST['c6']; $c7 = $_POST['c7']; $c8 = $_POST['c8']; $c9 = $_POST['c9']; $c10 = $_POST['c10'];
$c11 = $_POST['c11']; $c12 = $_POST['c12']; $c13 = $_POST['c13']; $c14 = $_POST['c14']; $c15 = $_POST['c15'];

/*
echo $id_siswa."<br>";
echo $c1."<br>"; echo $c2."<br>"; echo $c3."<br>"; echo $c4."<br>"; echo $c5."<br>";
echo $c6."<br>"; echo $c7."<br>"; echo $c8."<br>"; echo $c9."<br>"; echo $c10."<br>";
echo $c11."<br>"; echo $c12."<br>";echo $c13."<br>";echo $c14."<br>";echo $c15."<br>";
*/

if ($id_siswa=='none') {
	echo "<script>alert('Siswa belum dipilih.'); window.location='tambah-nilai.php'</script>";
} else {
	if (empty($c1) OR empty($c2) OR empty($c3) OR empty($c4) OR empty($c5) OR empty($c6) OR empty($c7) OR empty($c8) OR empty($c9) OR empty($c10) OR empty($c11) OR empty($c12) OR empty($c13) OR empty($c14) OR empty($c15)) {
		echo "<script>alert('Data belum lengkap. Silahkan ulangi lagi.'); window.location='tambah-nilai.php'</script>";
	} else {
		$querycek = mysqli_query($con,"SELECT * FROM nilai WHERE id_siswa='$id_siswa'");
		$ketemu = mysqli_fetch_array($querycek);
		if ($ketemu) {
			echo "<script>alert('Data siswa telah tersedia. Tidak dapat melakukan input lagi.'); window.location='tambah-nilai.php'</script>";
		} else {
			$queryinsert = mysqli_query($con,"INSERT INTO nilai(id_siswa,c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,c11,c12,c13,c14,c15,total)
										VALUES('$id_siswa','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$c13','$c14','$c15','0')");
			if($queryinsert){
			    echo "<script> alert('Data nilai siswa berhasil disimpan'); window.location ='nilai.php';</script>";
			} else {
			    echo "<script> alert('System Error! Please try again!'); window.location ='nilai.php';</script>";
			} //end. if $queryinsert
		} //end. if data siswa sudah tersedia
	} //end. if empty

} //end. if none

?>