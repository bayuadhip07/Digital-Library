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
                                    <h4 class="page-title float-left">Edit E-Book</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin")?>">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin/ebook_admin")?>">List E-Book</a></li>
                                        <li class="breadcrumb-item"><a href="#">Edit E-Book</a></li>
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
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                                                <?php echo $msg;?>
                                            </div>
                                        <?php } ?>
                                        <?php 
                                        $err=$this->session->flashdata('err');
                                        if(isset($err)){ ?>
                                            <div class="alert alert-danger" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                                                <?php echo $err;?>
                                            </div>
                                        <?php } ?>
                                        
                                        <?=form_open_multipart('proses/edit_ebook')?>
                                        <input type="hidden" name='id_buku' value="<?=$ebook->id_buku?>">
                                            <div class="form-group">
                                                <label>Judul </label>
                                                <input required type="text"  value="<?=$ebook->judul?>" autocomplete='off' name='judul' class='form-control required'>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Penulis </label>
                                                <input required type="text" value="<?=$ebook->penulis?>" autocomplete='off' name='penulis' class='form-control required'>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Penerbit </label>
                                                <input required type="text" value="<?=$ebook->penerbit?>" autocomplete='off' name='penerbit' class='form-control required'>
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Terbit </label>
                                                <input required type="text" value="<?=$ebook->tahun?>" autocomplete='off' name='tahun' class='form-control required'>
                                            </div>
                                            <div class='form-group'>
                                                <label>E-Mail</label>
                                                <input required type="email" value="<?=$ebook->email?>" autocomplete='off' name='email' class='form-control required' placeholder="">
                                            </div>
                                            <div class='form-group'>
                                                <label>Kota</label>
                                                <input type="text" value="<?=$ebook->kota?>" autocomplete='off' name='kota' class='form-control required' placeholder="">
                                            </div>
                                            <div class='form-group'>
                                                <label>Sinopsis </label>
                                                <input type="text" value="<?=$ebook->sinopsis?>" autocomplete='off' name='sinopsis' class='form-control required' placeholder="">
                                            </div>
                                            <a href="<?php echo site_url('upload/dokumen/ebook/'.$ebook->file)?>" class='btn btn-block btn-info'>Download PDF</a>
                                            <input type="hidden" name='ebook_lama' value="<?=$ebook->file?>">
                                            <div class='form-group'>
                                            <br>
                                                <label>File PDF</label>
                                                <input type="file"  class='dropify' data-file-max-size="10M" name='pdf_ebook' data-default-file='<?=site_url('upload/dokumen/ebook/'.$ebook->file)?>'>
                                                <small>* Jenis file PDF dan maksimal 10MB</small>
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
                                        <p>Pada halaman ini anda dapat mengubah biodata ebook</p>                                                                              
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