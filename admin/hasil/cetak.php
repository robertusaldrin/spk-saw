<?php 
session_start();
include '../../koneksi.php';
include 'get-bobot.php';

// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
$pdf->Image('../../assets/images/logo.jpg',55,5,35,35);
$pdf->SetFillColor(230,230,230);

// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','',15);
// mencetak string
$pdf->Cell(10,5,'',0,1);
$pdf->Cell(276,7,'Laporan Hasil SPK',0,1,'C');
$pdf->Cell(276,7,'Penentuan Siswa Penerima Bantuan Dana',0,1,'C');
$pdf->Cell(276,7,'SMK PL Leonardo Klaten',0,1,'C');
$pdf->Cell(10,5,'',0,1);
$pdf->SetFont('Arial','',10);

$pdf->Cell(10,3,'___________________________________________________________________________________________________________________________________________',0,1);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,5,'',0,1);
$pdf->SetFont('Arial','',10);
$pdf->Cell(8,6,'#',1,0,'C',true);
$pdf->Cell(55,6,'Siswa',1,0,'C',true);
$pdf->Cell(30,6,'Kelas',1,0,'C',true);
$pdf->Cell(10,6,'C1',1,0,'C',true);
$pdf->Cell(10,6,'C2',1,0,'C',true);
$pdf->Cell(10,6,'C3',1,0,'C',true);
$pdf->Cell(10,6,'C4',1,0,'C',true);
$pdf->Cell(10,6,'C5',1,0,'C',true);
$pdf->Cell(10,6,'C6',1,0,'C',true);
$pdf->Cell(10,6,'C7',1,0,'C',true);
$pdf->Cell(10,6,'C8',1,0,'C',true);
$pdf->Cell(10,6,'C9',1,0,'C',true);
$pdf->Cell(10,6,'C10',1,0,'C',true);
$pdf->Cell(10,6,'C11',1,0,'C',true);
$pdf->Cell(10,6,'C12',1,0,'C',true);
$pdf->Cell(10,6,'C13',1,0,'C',true);
$pdf->Cell(10,6,'C14',1,0,'C',true);
$pdf->Cell(10,6,'C15',1,0,'C',true);
$pdf->Cell(18,6,'Total',1,0,'C',true);
$pdf->Cell(15,6,'Rank',1,1,'C',true);
$pdf->SetFont('Arial','',10);

$no=0;
$rank=0;
$query = mysqli_query($con,"SELECT * FROM nilai,siswa WHERE nilai.id_siswa=siswa.id_siswa ORDER BY total DESC");
while ($da=mysqli_fetch_array($query)) {
$pdf->Cell(8,6,$no=$no+1,1,0,'C');
$pdf->Cell(55,6,$da['siswa'],1,0);
$pdf->Cell(30,6,$da['kelas'],1,0,'C');
$pdf->Cell(10,6,$da['c1'],1,0,'C');
$pdf->Cell(10,6,$da['c2'],1,0,'C');
$pdf->Cell(10,6,$da['c3'],1,0,'C');
$pdf->Cell(10,6,$da['c4'],1,0,'C');
$pdf->Cell(10,6,$da['c5'],1,0,'C');
$pdf->Cell(10,6,$da['c6'],1,0,'C');
$pdf->Cell(10,6,$da['c7'],1,0,'C');
$pdf->Cell(10,6,$da['c8'],1,0,'C');
$pdf->Cell(10,6,$da['c9'],1,0,'C');
$pdf->Cell(10,6,$da['c10'],1,0,'C');
$pdf->Cell(10,6,$da['c11'],1,0,'C');
$pdf->Cell(10,6,$da['c12'],1,0,'C');
$pdf->Cell(10,6,$da['c13'],1,0,'C');
$pdf->Cell(10,6,$da['c14'],1,0,'C');
$pdf->Cell(10,6,$da['c15'],1,0,'C');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(18,6,$da['total'],1,0,'C');
$pdf->Cell(15,6,$rank=$rank+1,1,1,'C');
$pdf->SetFont('Arial','',10);
}

$pdf->SetFont('Arial','',9);
$pdf->Cell(10,15,'',0,1);
$pdf->Cell(10,6,'Keterangan kriteria : ',0,1);

$pdf->Cell(6,5,'C1',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw1,0,0);
$pdf->Cell(6,5,'C6',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw6,0,0);
$pdf->Cell(6,5,'C11',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw11,0,1);

$pdf->Cell(6,5,'C2',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw2,0,0);
$pdf->Cell(6,5,'C7',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw7,0,0);
$pdf->Cell(6,5,'C12',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw12,0,1);

$pdf->Cell(6,5,'C3',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw3,0,0);
$pdf->Cell(6,5,'C8',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw8,0,0);
$pdf->Cell(6,5,'C13',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw13,0,1);

$pdf->Cell(6,5,'C4',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw4,0,0);
$pdf->Cell(6,5,'C9',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw9,0,0);
$pdf->Cell(6,5,'C14',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw14,0,1);

$pdf->Cell(6,5,'C5',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw5,0,0);
$pdf->Cell(6,5,'C10',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw10,0,0);
$pdf->Cell(6,5,'C15',0,0);
$pdf->Cell(3,5,'=',0,0);
$pdf->Cell(45,5,$nw15,0,1);

$pdf->Output();
?>