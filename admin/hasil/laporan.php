<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>LAPORAN HASIL PERHITUNGAN</h2>
            </div>


			<!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Perangkingan
                            </h2>
							<a href="cetak.php" target="_blank" class="btn btn-success" style="float: right; margin-top: -18pt;">
                            	Cetak
                            </a>
                        </div>
                        <div class="body table-responsive">

                            <table class="table table-bordered text-nowrap table-hover" style="font-size: 9pt;">
                                <thead>
                                    <tr style="background-color: #f7f7f7">
                                        <th>#</th>
                                        <th width="200">Siswa</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>C8</th>
                                        <th>C9</th>
                                        <th>C10</th>
                                        <th>C11</th>
                                        <th>C12</th>
                                        <th>C13</th>
                                        <th>C14</th>
                                        <th>C15</th>
                                        <th>Nilai<br>Akhir</th>
                                        <th>Rank</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php include '../../koneksi.php';
                                    $no=0;
                                    $rank=0;
                                    $query = mysqli_query($con,"SELECT * FROM nilai,siswa WHERE nilai.id_siswa=siswa.id_siswa ORDER BY total DESC");
                                    while ($da=mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <th><?php echo $no=$no+1; ?></th>
                                        <td><?php echo substr($da['siswa'],0,30)?></td>
                                        <td><?php echo $da['c1']; ?></td>
                                        <td><?php echo $da['c2']; ?></td>
                                        <td><?php echo $da['c3']; ?></td>
                                        <td><?php echo $da['c4']; ?></td>
                                        <td><?php echo $da['c5']; ?></td>
                                        <td><?php echo $da['c6']; ?></td>
                                        <td><?php echo $da['c7']; ?></td>
                                        <td><?php echo $da['c8']; ?></td>
                                        <td><?php echo $da['c9']; ?></td>
                                        <td><?php echo $da['c10']; ?></td>
                                        <td><?php echo $da['c11']; ?></td>
                                        <td><?php echo $da['c12']; ?></td>
                                        <td><?php echo $da['c13']; ?></td>
                                        <td><?php echo $da['c14']; ?></td>
                                        <td><?php echo $da['c15']; ?></td> 
                                        <td><?php echo $da['total']; ?></td> 
                                        <td align="center"><?php echo $rank=$rank+1;?></td>
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