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
                        $query=mysqli_query($con,"SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'");
                        $a=mysqli_fetch_array($query);?>
                            <h2>
                                Tambah Sub Kriteria <?php echo $a['kriteria']." (".$a['kd_kriteria'].")";?>
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="POST" action="proses-tambah.php">

                            	<input type="text" hidden="" name="id_kriteria" value="<?php echo $id_kriteria;?>">

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Sub Kriteria</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" placeholder="Sub Kriteria" name="subkriteria">
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
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary m-t-5 waves-effect">
                                        &nbsp&nbsp&nbsp
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