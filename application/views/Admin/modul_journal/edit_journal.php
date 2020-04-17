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
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="<?=base_url("admin")?>" class="logo">
                        <img src="<?=base_url("assets/img/logo.png")?>" width="50" height="50" data-retina="true" alt="">
                    </a>
                </div>
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <?php
                            $this->load->view('admin/include/akun');
                        ?>
                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <!-- <li class="hidden-mobile app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li> -->
                    </ul>

                </nav>

            </div>
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
                                    <h4 class="page-title float-left">Edit Jurnal</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin")?>">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin/journal_admin")?>">List Jurnal</a></li>
                                        <li class="breadcrumb-item"><a href="#">Edit Jurnal</a></li>
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
                                        
                                        <?=form_open_multipart('proses/edit_jurnal')?>
                                        <input type="hidden" name='id_jurnal' value="<?=$jurnal->id_jurnal?>">
                                            <div class="form-group">
                                                <label>Judul </label>
                                                <input required type="text"  value="<?=$jurnal->judul?>" autocomplete='off' name='judul' class='form-control required'>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Penulis </label>
                                                <input required type="text" value="<?=$jurnal->penulis?>" autocomplete='off' name='penulis' class='form-control required'>
                                            </div>
                                            <div class="form-group">
                                                <label>Tahun Terbit </label>
                                                <input required type="text" value="<?=$jurnal->tahun?>" autocomplete='off' name='tahun' class='form-control required'>
                                            </div>
                                            <div class='form-group'>
                                                <label>E-Mail</label>
                                                <input required type="email" value="<?=$jurnal->email?>" autocomplete='off' name='email' class='form-control required' placeholder="">
                                            </div>
                                            <div class='form-group'>
                                                <label>ISSN</label>
                                                <input type="text" value="<?=$jurnal->issn?>" autocomplete='off' name='issn' class='form-control required' placeholder="">
                                                * isi "-" jika kosong
                                            </div><div class='form-group'>
                                                <label>ISBN </label>
                                                <input type="text" value="<?=$jurnal->isbn?>" autocomplete='off' name='isbn' class='form-control required' placeholder="">
                                                * isi "-" jika kosong
                                            </div>
                                            <div class='form-group'>
                                                <label>Abstrak</label>
                                                <input required type="text" value="<?=$jurnal->abstrak?>" autocomplete='off' name='abstrak' class='form-control required' placeholder="">
                                            </div>
                                            <a href="<?php echo site_url('upload/dokumen/jurnal/'.$jurnal->pdf_jurnal)?>" class='btn btn-block btn-info'>Download PDF</a>
                                            <input type="hidden" name='jurnal_lama' value="<?=$jurnal->pdf_jurnal?>">
                                            <div class='form-group'>
                                                <label>File PDF</label>
                                                <input type="file"  class='dropify' data-file-max-size="5M" name='pdf_jurnal' data-default-file='<?=site_url('upload/dokumen/journal/'.$jurnal->pdf_jurnal)?>'>
                                                <smalltext>*Max 5 MB</smalltext>
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
                                        <p>Pada halaman ini anda dapat menambah jurnal</p>                                                                              
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