<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA KRITERIA</h2>
            </div>

            <!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Kriteria
                            </h2>
                        </div>
                        <div class="body table-responsive">

                            <table class="table table-bordered table-hover" style="font-size: 10.5pt;">
                                <tbody>
                                    <tr style="font-weight: bold; background-color: #f7f7f7" align="center">
                                        <td width="50">#</td>
                                        <td>Kode</td>
                                        <td width="350">Kriteria</td>
                                        <td width="180">Tipe</td>
                                        <td width="180">Bobot</td>
                                        <td width="115"></td>
                                    </tr>

                                	<?php
                                	include '../../koneksi.php';
                                	$no=0;
                                	$query=mysqli_query($con,"SELECT * FROM kriteria");
                                	while ($a=mysqli_fetch_array($query)) {?>
                                    <tr>
                                        <th><?php echo $no=$no+1; ?></th>
                                        <td align="center"><?php echo $a['kd_kriteria'] ?></td>
                                        <td><?php echo $a['kriteria'] ?></td>
                                        <td align="center"><?php echo $a['tipe'] ?></td>
                                        <td align="center"><?php echo $a['bobot'] ?></td>
                                        <td align="center">
                                        	<a href="edit-kriteria.php?id_kriteria=<?php echo $a['id_kriteria'];?>" class="btn btn-primary" style="padding: 3pt;">&nbsp Edit &nbsp</a>
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