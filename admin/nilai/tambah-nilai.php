<?php include '../../template/header.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>INPUT NILAI</h2>
            </div>


		<!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tambah Data
                            </h2>
                        </div>
                        <div class="body">
                        	<form class="form-horizontal" action="proses-tambah.php" method="POST">

								<div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label>Nama Siswa</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select class="form-control show-tick" name="id_siswa">
                                                	<option value="none">- Pilih Siswa -</option>
													<?php include '../../koneksi.php';
					                                $q1 = mysqli_query($con,"SELECT * FROM siswa");
					                                while($a=mysqli_fetch_array($q1)){ ?>
					                                		<option value="<?php echo $a['id_siswa']; ?>"><?php echo $a['siswa']; ?></option>
                                                	<?php }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div><hr>


                                
                                <label style="margin-left: 50pt;">1. Orang Tua Anak</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c1 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='1'");
		                                while($q=mysqli_fetch_array($c1)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c1" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">2. Saudara Usia Sekolah</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c2 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='2'");
		                                while($q=mysqli_fetch_array($c2)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c2" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">3. Penghasilan Orang Tua</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c3 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='3'");
		                                while($q=mysqli_fetch_array($c3)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c3" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">4. Luas Tempat Tinggal</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c4 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='4'");
		                                while($q=mysqli_fetch_array($c4)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c4" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>																						

                                <label style="margin-left: 50pt;">5. Luas Bangunan Rumah</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c5 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='5'");
		                                while($q=mysqli_fetch_array($c5)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c5" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">6. Kondisi Bangunan - Atap</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c6 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='6'");
		                                while($q=mysqli_fetch_array($c6)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c6" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">7. Kondisi Bangunan - Dinding</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c7 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='7'");
		                                while($q=mysqli_fetch_array($c7)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c7" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>																

                                <label style="margin-left: 50pt;">8. Kondisi Bangunan - Lantai</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c8 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='8'");
		                                while($q=mysqli_fetch_array($c8)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c8" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">9. Kepemilikan Rumah</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c9 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='9'");
		                                while($q=mysqli_fetch_array($c9)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c9" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">10. Kendaraan</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c10 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='10'");
		                                while($q=mysqli_fetch_array($c10)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c10" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>								

                                <label style="margin-left: 50pt;">11. Barang Elektronik</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c11 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='11'");
		                                while($q=mysqli_fetch_array($c11)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c11" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">12. Luas Sawah/ Ladang</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c12 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='12'");
		                                while($q=mysqli_fetch_array($c12)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c12" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">13. Hewan Ternak</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c13 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='13'");
		                                while($q=mysqli_fetch_array($c13)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c13" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">14. Tagihan Listrik (PLN)</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c14 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='14'");
		                                while($q=mysqli_fetch_array($c14)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c14" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>

                                <label style="margin-left: 50pt;">15. Tagihan Air (PAM)</label>
								<div>
	                            <table style="width: 85%; margin-left: 50pt">
	                                    <tr>
	                            		<?php include '../../koneksi.php';
		                                $c15 = mysqli_query($con,"SELECT * FROM subkriteria WHERE id_kriteria='15'");
		                                while($q=mysqli_fetch_array($c15)){ ?>
	                                        <td style="width: 25%">
	                                        	<input name="c15" type="radio" class="with-gap radio-col-black" id="id<?php echo $q['id_subkriteria']?>" value="<?php echo $q['nilai']?>"/>
                                				<label for="id<?php echo $q['id_subkriteria']?>"><?php echo $q['subkriteria']; ?></label>
	                                        </td>
										<?php } ?>
	                                    </tr>
	                            </table>
								</div><br>																												


                                <br>
								<div class="row clearfix">
                                    <div class="col-lg-offset-1 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary m-t-5 waves-effect">
                                        &nbsp&nbsp&nbsp
                                        <a href="nilai.php" type="button" class="btn btn-warning m-t-5 waves-effect">Batal</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->


<?php include '../../template/footer.php'; ?>