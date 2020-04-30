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
                                    <h4 class="page-title float-left">Tambah File Lain</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin")?>">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin/lainnya_admin")?>">List File Lain</a></li>
                                        <li class="breadcrumb-item"><a href="#">Tambah File Lain</a></li>
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
                                        
                                        <?=form_open_multipart('proses/tambah_lainnya')?>
                                            <div class="form-group">
                                                <label>Judul </label>
                                                <input required type="text" autocomplete='off' name='judul' class='form-control required'>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Penulis </label>
                                                <input required type="text" autocomplete='off' name='penulis' class='form-control required'>
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Terbit </label>
                                                <input required type="number" autocomplete='off' name='tahun' class='form-control required'>
                                            </div>
                                            <div class='form-group'>
                                                <label>E-Mail</label>
                                                <input required type="email" autocomplete='off' name='email' class='form-control required' placeholder="">
                                            </div>
                                            <div class='form-group'>
                                                <label>Jenis Dokumen</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="jenis" id="jenis">
                                                        <option value="" selected="">Pilih Jenis Dokumen</option>
                                                        <?php
                                                            foreach ($jenis as $a) 
                                                            {
                                                            echo "<option value='$a[nama]'>$a[nama]</option>";
                                                            }
                                                        ?>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>
                                            <div class='form-group'>
                                                <label>Ringkasan</label>
                                                <textarea name="ringkasan" id="" cols="30" rows="10" class='form-control required' placeholder=""></textarea>
                                                <small>* Maksimal 1000 karakter</small>
                                            </div>

                                            <div class='form-group'>
                                                <label>File PDF</label>
                                                <input required type="file" class='dropify' data-file-max-size="10M" name='file'>
                                                <small>*Format file PDF dan ukuran maksimal file 10MB</small>
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
                                        <p>Pada halaman ini anda dapat menambah file dengan jenis lainnya</p>                                                                              
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
                    'fileSize': 'The file size is too big (2M max).'
                }
            });
    </script>

    </body>
</html>