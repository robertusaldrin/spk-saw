<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>INPUT NILAI</h2>
            </div>

            <!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Nilai
                            </h2>
							<a href="tambah-nilai.php" class="btn btn-primary" style="float: right; margin-top: -18pt;">
                            	+ Tambah
                            </a>
                        </div>
                        <div class="body table-responsive">

                            <table class="table text-nowrap table-bordered table-hover" style="font-size: 9.5pt;">
                                <tbody>
                                    <tr style="font-weight: bold; background-color: #f7f7f7" align="center">
                                        <td>#</td>
                                        <td>Siswa</td>
                                        <td>(C1)<br>Orang Tua</td>
                                        <td>(C2)<br>Saudara<br>Usia<br>Sekolah</td>
                                        <td>(C3)<br>Penghasilan<br>Orang Tua</td>
                                        <td>(C4)<br>Luas<br>Tempat<br>Tinggal</td>
                                        <td>(C5)<br>Luas<br>Bangunan<br>Rumah</td>
                                        <td>(C6)<br>Atap</td>
                                        <td>(C7)<br>Dinding</td>
                                        <td>(C8)<br>Lantai</td>
                                        <td>(C9)<br>Kepemilikan<br>Rumah</td>
                                        <td>(C10)<br>Kendaraan</td>
                                        <td>(C11)<br>Barang<br>Elektronik</td>
                                        <td>(C12)<br>Luas Sawah/<br>Ladang</td>
                                        <td>(C13)<br>Hewan<br>Ternak</td>
                                        <td>(C14)<br>Tagihan<br>Listrik (PLN)</td>
                                        <td>(C15)<br>Tagihan<br>Air (PAM)</td>
                                        <td width="115"></td>
                                    </tr>

                                    <?php
                                    include '../../koneksi.php';
                                	$no=0;
                                	$query=mysqli_query($con,"SELECT * FROM nilai,siswa WHERE nilai.id_siswa=siswa.id_siswa");
                                	while ($a=mysqli_fetch_array($query)) {?>
                                    <tr>
                                        <th><?php echo $no=$no+1; ?></th>
                                        <td><?php echo $a['siswa']; ?></td>
                                        <td>
                                        	<?php $queryc1=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='1' AND subkriteria.nilai='$a[c1]'");
                                			while ($c1=mysqli_fetch_array($queryc1)) { echo $c1['subkriteria']; } ?>

                                        </td>
                                        <td>
                                        	<?php $queryc2=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='2' AND subkriteria.nilai='$a[c2]'");
                                			while ($c2=mysqli_fetch_array($queryc2)) { echo $c2['subkriteria']; } ?>

                                        </td>
										<td>
                                        	<?php $queryc3=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='3' AND subkriteria.nilai='$a[c3]'");
                                			while ($c3=mysqli_fetch_array($queryc3)) { echo $c3['subkriteria']; } ?>
                                        </td>
										<td>
                                        	<?php $queryc4=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='4' AND subkriteria.nilai='$a[c4]'");
                                			while ($c4=mysqli_fetch_array($queryc4)) { echo $c4['subkriteria']; } ?>
                                        </td>
										<td>
                                        	<?php $queryc5=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='5' AND subkriteria.nilai='$a[c5]'");
                                			while ($c5=mysqli_fetch_array($queryc5)) { echo $c5['subkriteria']; } ?>
                                        </td>                                        
										<td>
                                        	<?php $queryc6=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='6' AND subkriteria.nilai='$a[c6]'");
                                			while ($c6=mysqli_fetch_array($queryc6)) { echo $c6['subkriteria']; } ?>
                                        </td>       
										<td>
                                        	<?php $queryc7=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='7' AND subkriteria.nilai='$a[c7]'");
                                			while ($c7=mysqli_fetch_array($queryc7)) { echo $c7['subkriteria']; } ?>
                                        </td>       
										<td>
                                        	<?php $queryc8=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='8' AND subkriteria.nilai='$a[c8]'");
                                			while ($c8=mysqli_fetch_array($queryc8)) { echo $c8['subkriteria']; } ?>
                                        </td>
										<td>
                                        	<?php $queryc9=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='9' AND subkriteria.nilai='$a[c9]'");
                                			while ($c9=mysqli_fetch_array($queryc9)) { echo $c9['subkriteria']; } ?>
                                        </td>
										<td>
                                        	<?php $queryc10=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='10' AND subkriteria.nilai='$a[c10]'");
                                			while ($c10=mysqli_fetch_array($queryc10)) { echo $c10['subkriteria']; } ?>
                                        </td>    
										<td>
                                        	<?php $queryc11=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='11' AND subkriteria.nilai='$a[c11]'");
                                			while ($c11=mysqli_fetch_array($queryc11)) { echo $c11['subkriteria']; } ?>
                                        </td>
										<td>
                                        	<?php $queryc12=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='12' AND subkriteria.nilai='$a[c12]'");
                                			while ($c12=mysqli_fetch_array($queryc12)) { echo $c12['subkriteria']; } ?>
                                        </td>
										<td>
                                        	<?php $queryc13=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='13' AND subkriteria.nilai='$a[c13]'");
                                			while ($c13=mysqli_fetch_array($queryc13)) { echo $c13['subkriteria']; } ?>
                                        </td>
										<td>
                                        	<?php $queryc14=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='14' AND subkriteria.nilai='$a[c14]'");
                                			while ($c14=mysqli_fetch_array($queryc14)) { echo $c14['subkriteria']; } ?>
                                        </td>
										<td>
                                        	<?php $queryc15=mysqli_query($con,"SELECT * FROM subkriteria,kriteria WHERE subkriteria.id_kriteria=kriteria.id_kriteria AND subkriteria.id_kriteria='15' AND subkriteria.nilai='$a[c15]'");
                                			while ($c15=mysqli_fetch_array($queryc15)) { echo $c15['subkriteria']; } ?>
                                        </td>
                                        <td align="center">
                                        	<a href="#" class="btn btn-primary" style="font-size: 8pt; padding: 1pt 3pt;">Ubah</a>
                                        	<a href="proses-hapus.php?id_nilai=<?php echo $a['id_nilai'];?>"" onClick="return confirm('Hapus data ?')" class="btn btn-danger" style="font-size: 8pt; padding: 1pt 3pt;">Hapus</i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->


<?php include '../../template/footer.php'; ?>