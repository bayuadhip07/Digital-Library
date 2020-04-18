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
                                    <h4 class="page-title float-left">Tambah Anggota</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin")?>">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin/anggota")?>">Anggota</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tambah Anggota</a></li>
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
                                    if(isset($msg))
                                    { ?>
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
                                        
                                        <?=form_open_multipart('proses/tambah_anggota')?>
                                            <div class="form-group">
                                                <label>Nama </label>
                                                <input required type="text" name='nama' class='form-control required'>
                                            </div>

                                            <div class='form-group'>
                                                <label>Agama</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="agama" id="agama">
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

                                            <div class='form-group'>
                                                <label>Jenis Kelamin</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="jk" id="agama">
                                                        <option value="" selected="">Pilih Jenis Kelamin</option>
                                                        <?php
                                                            foreach ($jenkel as $a) 
                                                            {
                                                            echo "<option value='$a[id_jk]'>$a[jenis_kelamin]</option>";
                                                            }
                                                        ?>
                                                    </select>
							                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea name="alamat" cols="30" rows="5" required="" class='form-control required'></textarea>
                                            </div>

                                            <div class='form-group'>
                                                <label>Universitas</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="univ" id="univ">
                                                        <option value="" selected="">Pilih Universitas</option>
                                                        <?php
                                                            foreach ($univ as $a) 
                                                            {
                                                            echo "<option value='$a[id_univ]'>$a[nama_univ]</option>";
                                                            }
                                                        ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>

                                            <div class='form-group'>
                                                <label>Fakultas</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="fakultas" id="fakultas">
                                                        <option value="" selected="">Pilih Fakultas</option>
                                                        <?php
                                                            foreach ($fakultas as $a) 
                                                            {
                                                            echo "<option value='$a[id_fakultas]'>$a[fakultas]</option>";
                                                            }
                                                        ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>

                                            <div class='form-group'>
                                                <label>Program Studi</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" name="prodi" id="prodi">
                                                        <option value="" selected="">Pilih Program Studi</option>
                                                        <?php
                                                            foreach ($prodi as $a) 
                                                            {
                                                            echo "<option value='$a[id_prodi]'>$a[prodi]</option>";
                                                            }
                                                        ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input required type="text"  name='nim' class='form-control required'>
                                            </div>

                                            <div class='form-group'>
                                                <label>E-mail</label>
                                                <input required type="email" name='email' class='form-control required' placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label>No. HP</label>
                                                <input required type="number" name='no_hp' class='form-control required'  placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label>Kata Sandi</label>
                                                <input required type="password" name='password' class='form-control required'  placeholder="">
                                            </div>

                                            <div class='form-group'>
                                                <label>Foto</label>
                                                <input required type="file" class='dropify' data-file-max-size="2M" name='foto'>
                                                <small>* Ukuran foto maksimal 1 MB</small>
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
                                        <br>
                                        <h5 class='card-title'>Informasi</h5>
                                        <p>Pada halaman ini anda dapat menambah anggota</p>                                                                              
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