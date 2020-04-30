<!doctype html>
<html lang="en">

    <head>
        <?php
            $this->load->view('admin/include/head');
        ?>
        <link href="<?=base_url('assets/dropify.min.css') ?>" rel="stylesheet" type="text/css" />
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
                <?php
                    $this->load->view('admin/include/akun');
                ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <?php
                            $this->load->view('admin/include/sidebar');
                        ?>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
							<div class="col-xl-12">
								<div class="page-title-box">
                                    <h4 class="page-title float-left">Edit Anggota</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin")?>">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin/anggota")?>">List Anggota</a></li>
                                        <li class="breadcrumb-item"><a href="#">Edit Anggota</a></li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

                        <div class='row'>
                        <div class='col-md-8'>
                                <div class='card m-b-20'>
                                    <div class='card-body'>
                                        
                                        <?php 
                                            $msg=$this->session->flashdata('msg');
                                            if(isset($msg)){ ?>
                                            <div class="alert alert-success" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <?php echo $msg;?>
                                            </div>
                                        <?php } ?>
                                        <?php 
                                            $err=$this->session->flashdata('err');
                                            if(isset($err)){ ?>
                                            <div class="alert alert-danger" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <?php echo $err;?>
                                            </div>
                                        <?php } ?>
                                        <!-- <?php
                                                echo json_encode($anggota->id_anggota);
                                        ?>                                         -->
                                        <?=form_open_multipart('proses/update_anggota')?>
                                            <input type="hidden" name='id' value="<?=$anggota->id_anggota?>">

                                            <div class="form-group">
                                                <label>Nama </label>
                                                <input required type="text" value="<?=$anggota->nama?>" autocomplete='off' name='nama' class='form-control required'>
                                            </div>

                                            <div class='form-group'>
                                                <label>Agama</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="agama" id="agama">
                                                        <option value="">Pilih Agama</option>
                                                            <?php foreach($agama as $t):?>
                                                                <option value="<?=$t->id_agama?>"
                                                                    <?php if($t->agama == $anggota->agama):?>
                                                                        selected
                                                                    <?php endif;?>
                                                                ><?=$t->agama?></option>
                                                            <?php endforeach;?>
                                                    </select>
							                    </div>
                                            </div>

                                            <div class='form-group'>
                                                <label>Jenis Kelamin</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="jk" id="agama">
                                                        <option value="" >Pilih Jenis Kelamin</option>
                                                            <?php foreach($jenkel as $t):?>
                                                                    <option value="<?=$t->id_jk?>"
                                                                        <?php if($t->id_jk == $anggota->jk):?>
                                                                            selected
                                                                        <?php endif;?>
                                                                    ><?=$t->jenis_kelamin?></option>
                                                                <?php endforeach;?>
                                                    </select>
							                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input required type="text" value="<?=$anggota->alamat?>" autocomplete='off' name='alamat' class='form-control required'>
                                            </div>

                                            <div class='form-group'>
                                                <label>Universitas</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="univ" id="univ">
                                                        <option value="">Pilih Universitas</option>
                                                        <?php foreach($univ as $t):?>
                                                                <option value="<?=$t->id_univ?>"
                                                                    <?php if($t->id_univ == $anggota->univ):?>
                                                                        selected
                                                                    <?php endif;?>
                                                                ><?=$t->nama_univ?></option>
                                                            <?php endforeach;?>
                                                            <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>

                                            <div class='form-group'>
                                                <label>Fakultas</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="fakultas" id="fakultas">
                                                        <option value="" >Pilih Fakultas</option>
                                                            <?php foreach($fakultas as $t):?>
                                                                    <option value="<?=$t->id_fakultas?>"
                                                                        <?php if($t->fakultas == $anggota->fakultas):?>
                                                                            selected
                                                                        <?php endif;?>
                                                                    ><?=$t->fakultas?></option>
                                                            <?php endforeach;?>
                                                            <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>

                                            <div class='form-group'>
                                                <label>Program Studi</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="prodi" id="prodi">
                                                        <option value="">Pilih Program Studi</option>
                                                            <?php foreach($prodi as $t):?>
                                                                    <option value="<?=$t->id_prodi?>"
                                                                        <?php if($t->prodi == $anggota->prodi):?>
                                                                            selected
                                                                        <?php endif;?>
                                                                    ><?=$t->prodi?></option>
                                                            <?php endforeach;?>
                                                            <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input required type="text" value="<?=$anggota->nim?>" autocomplete='off' name='nim' class='form-control required'>
                                            </div>

                                            <div class='form-group'>
                                                <label>E-mail</label>
                                                <input required type="email" value="<?=$anggota->email?>" autocomplete='off' name='email' class='form-control required' placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label>No. HP</label>
                                                <input required type="number" value="<?=$anggota->phone?>" name='no_hp' class='form-control required' autocomplete='off' placeholder="">
                                            </div>
                                            <!-- <input type="hidden" name='password_lama' value="<?=$anggota->password?>"> -->
                                
                                            <div class="form-group">
                                                <label>Status</label>
                                                <div class="styled-select">
                                                    <select class="form-control required" required="" name="status" >
                                                        <option value="Aktif">Aktif</option>
                                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Kata Sandi</label>
                                                <input type="password" value="<?=$anggota->password?>" name='password' class='form-control required' autocomplete='off' placeholder="">
                                                <small>*Jika tidak ingin mengubah kata sandi,biarkan saja bagian ini</small>
                                            </div>
                                            <input type="hidden" name='foto_lama' value="<?=$anggota->foto?>">
                                            <div class='form-group'>
                                                <label>Foto</label>
                                                <input type="file" class='dropify' data-file-max-size="4M" name='foto' data-default-file='<?=site_url('upload/foto/'.$anggota->foto)?>'>
                                                <small>* Ukuran foto maksimal 3 MB</small>
                                            </div>
                                            <button class='btn btn-primary'>
                                                <span class='btn-label'>
                                                    <i class='fa fa-plus'></i>
                                                </span>Simpan
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-4'>
                                <div class='card mb-20'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>Informasi</h5>
                                        <p>Pada halaman ini anda dapat mengubah data anggota </p>                                                                                
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div><!-- end col-->


                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->



            </div>
            <!-- End content-page -->

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

            <footer class="footer">
                <?php
                    $this->load->view('admin/include/footer');
                ?>
            </footer>

        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>
        
        <!-- jQuery  -->
       <?php
            $this->load->view('admin/include/javascript');
       ?>

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