<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA SUB KRITERIA</h2>
            </div>

            <!-- Bordered Table -->
            <div class="row clearfix">

            <?php
            include '../../koneksi.php';
            $query=mysqli_query($con,"SELECT * FROM kriteria");
            while ($a=mysqli_fetch_array($query)) {?>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" style="height: 220pt;">
                        <div class="header" style="padding: 10pt 15pt;">
                            <h2>
                                (<?php echo $a['kd_kriteria'];?>) <?php echo $a['kriteria'];?>
                            </h2>
                            <a href="tambah-subkriteria.php?id_kriteria=<?php echo $a['id_kriteria'];?>" class="btn btn-primary" style="float: right; margin-top: -16pt; margin-right: 8pt; padding: 2pt 6pt;">
                            	&nbsp Tambah &nbsp
                            </a>
                        </div>
                        <div class="body table-responsive" style="padding: 10pt 10pt;">
                            <table class="table table-bordered table-hover" style="font-size: 10.5pt;">
                                <tbody>
                                    <tr style="font-weight: bold; background-color: #f7f7f7" align="center">
                                        <td width="200">Sub Kriteria</td>
                                        <td>Nilai</td>
                                        <td></td>
                                    </tr>
                                    
									<?php
                                    include '../../koneksi.php';
                                    $query2=mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='$a[id_kriteria]' ORDER BY nilai ASC");
                                    while ($q2=mysqli_fetch_array($query2)) {?>
                                    <tr align="center"">
                                    	<td><?php echo $q2['subkriteria']; ?></td>
                                    	<td><?php echo $q2['nilai']; ?></td>
                                    	<td>
                                    		<a href="edit-subkriteria.php?id_subkriteria=<?php echo $q2['id_subkriteria'];?>&id_kriteria=<?php echo $a['id_kriteria'];?>">
                                    			<i class="material-icons" style="font-size: 13pt;">edit</i>
                                    		</a>
                                    		<a href="proses-hapus.php?id_subkriteria=<?php echo $q2['id_subkriteria'];?>" onClick="return confirm('Hapus data <?php echo $q2['subkriteria'];?> ?')">
                                    			<i class="material-icons" style="font-size: 13pt;">delete</i>
                                    		</a>
                                    	</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php } ?>

            </div>
            <!-- #END# Bordered Table -->



<?php include '../../template/footer.php'; ?>