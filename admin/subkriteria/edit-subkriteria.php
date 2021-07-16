<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DATA SUB KRITERIA</h2>
            </div>


            <!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<?php
	                        include '../../koneksi.php';
	                        $id_kriteria = $_GET['id_kriteria'];
	                        $query1=mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'");
	                        $a1=mysqli_fetch_array($query1);?>
                            <h2>
                                Edit Sub Kriteria <?php echo $a1['kriteria']." (".$a1['kd_kriteria'].")";?>
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" action="proses-edit.php" method="POST">

                                <?php
                                include '../../koneksi.php';
                                $id_subkriteria=$_GET['id_subkriteria'];
                                $query = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_subkriteria='$id_subkriteria'");
                                $a=mysqli_fetch_array($query);
                                ?>

                                <input type="text" hidden="" name="id_subkriteria" value="<?php echo $a['id_subkriteria'];?>">

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Sub Kriteria</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input name="subkriteria" type="text" class="form-control" placeholder="Kriteria" value="<?php echo $a['subkriteria'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nilai</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="nilai">
                                                <?php
                                                include '../../koneksi.php';
                                                $query = mysqli_query($con,"SELECT nilai FROM subkriteria WHERE id_subkriteria='$id_subkriteria'");
                                                $b=mysqli_fetch_array($query);
                                                if ($b['nilai']=='1') { ?>
                                                    <option value="1" selected="">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                <?php } elseif ($b['nilai']=='2') { ?>
                                                    <option value="1">1</option>
                                                    <option value="2" selected="">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                <?php } elseif ($b['nilai']=='3') { ?>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="">3</option>
                                                    <option value="4">4</option>
                                                <?php } elseif ($b['nilai']=='4') { ?>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="">4</option>
                                                <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary m-t-5 waves-effect">&nbsp&nbsp&nbsp&nbsp
                                        <a href="subkriteria.php" type="button" class="btn btn-warning m-t-5 waves-effect">Batal</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->


<?php include '../../template/footer.php'; ?>