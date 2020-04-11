<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $this->load->view('include/head');
    ?>
    <link href="<?=base_url('assets/dropify.min.css') ?>" rel="stylesheet" type="text/css" />

</head>

<body id="admission_bg">
	
	<!-- <div id="preloader">
		<div data-loader="circle-side"></div>
	</div> -->
	<!-- End Preload -->
	
	<div id="form_container" class="clearfix">
		<figure>
			<a href="<?=base_url('home')?>"><img src="<?=base_url("assets/img/logo.png")?>" width="100" height="100" data-retina="true" alt=""></a>
		</figure>
		<div id="wizard_container">
			<div id="top-wizard">
				<div id="progressbar"></div>
			</div>
			<!-- /top-wizard -->
			<form name="" id="" method="POST" action="<?=site_url('proses/add_user')?>" enctype="multipart/form-data">
				<input id="website" name="website" type="text" value="">
				<!-- Leave for security protection, read docs for details -->
				<div id="middle-wizard">
					
					<div class="step">
						<h3 class="main_question"><center>Silakan Lengkapi Data Diri Anda<center></h3>

						<div class="form-group">
							<input type="text" name="nama" required="" class="form-control required" placeholder="Nama">
                        </div>
						<div class="form-group select">
							<div class="styled-select">
								<select class="required" name="agama" id="agama">
									<option value="" selected="">Pilih Agama</option>
                                    <?php
                                        foreach ($agama as $a) 
                                        {
                                        echo "<option value='$a[id_agama]'>$a[agama]</option>";
                                        }
                                    ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="alamat" required="" class="form-control" placeholder="Alamat">
						</div>
						<div class="form-group radio_input">
							<label><input type="radio" value="laki-laki" checked name="jk" class="icheck">Laki-laki</label>
							<label><input type="radio" value="perempuan" name="jk" class="icheck">Perempuan</label>
						</div>
					</div>
					<!-- /step-->
					<div class="step">
						<h3 class="main_question"><center>Silakan Lengkapi Data Diri Anda<center></h3>
                        <div class="form-group select">
							<div class="styled-select">
								<select class="required" name="univ" id="univ">
                                <option value="" selected="">Universitas</option>
                                    <?php
                                        foreach ($univ as $r) 
                                        {
                                        echo "<option value='$r[id_univ]'>$r[nama_univ]</option>";
                                        }
                                    ?>
								</select>
							</div>
                        </div>
                        <div class="form-group select">
							<div class="styled-select">
								<select class="required" name="fakultas" id="fakultas">
									<option value="" selected="">Fakultas</option>
									<option value="fasilkom">Fakultas Ilmu Komputer</option>
									<option value="lainnya">Lainnya</option>
								</select>
							</div>
                        </div>
                        <div class="form-group select">
							<div class="styled-select">
								<select class="required" name="prodi" id="prodi">
									<option value="" selected="">Program Studi</option>
									<option value="ti">Teknik Informatika</option>
									<option value="si">Sistem Informasi</option>
								</select>
							</div>
                        </div>
                        <div class="form-group">
							<input type="text" name="nim"  class="form-control" placeholder="NIM">
						</div>
					</div>
					<!-- /step-->

					<div class="submit step">
                        <h3 class="main_question"><center>Silakan Lengkapi Data Diri Anda</center></h3>
                        <div class="form-group">
							<input type="email" name="email" required="" class="form-control required" placeholder="E-mail">
						</div>
						<div class="form-group">
							<input type="number" name="no_hp" required="" class="form-control required" placeholder="No. HP">
                        </div>
                        <div class="form-group">
							<input type="password" name="password" required="" class="form-control required" placeholder="Kata Sandi Akun">
                        </div>
                        <div class='form-group'>
                          <input required type="file" class='dropify' name='foto'>
                        </div>
					</div>
					<!-- /step-->
				</div>
				<!-- /middle-wizard -->
				<div id="bottom-wizard">
					<button type="button" name="backward" class="backward">Kembali </button>
					<button type="button" name="forward" class="forward">Selanjutnya</button>
					<button type="submit" name="process" class="submit">Daftar</button>
				</div>
				<!-- /bottom-wizard -->
			</form>
		</div>
		<!-- /Wizard container -->
	</div>
	<!-- /Form_container -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
    <?php
        $this->load->view('include/javascript');
    ?>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?=base_url("assets/js/jquery-ui-1.8.22.min.js")?>"></script>
	<script src="<?=base_url("assets/js/jquery.wizard.js")?>"></script>
	<script src="<?=base_url("assets/js/jquery.validate.js")?>"></script>
    <script src="<?=base_url("assets/js/admission_func.js")?>"></script>
    <script src="<?=base_url('assets/dropify.min.js') ?>"></script>
  
    <script>
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (1M max).'
                }
            });
        </script>
</body>
</html>