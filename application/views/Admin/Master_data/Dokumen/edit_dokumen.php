<!doctype html>
<html lang="en">

    <head>
        <?php
            $this->load->view('admin/include/head');
        ?>
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
                                    <h4 class="page-title float-left">Edit Data Jenis Dokumen</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin")?>">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin/dokumen")?>">Data Jenis Dokumen</a></li>
                                        <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
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
                                                echo json_encode($dokumen->dokumen);
                                        ?>                                         -->
                                        <?=form_open_multipart('proses/update_dokumen')?>
                                            <input type="hidden" name='id_dokumen' value="<?=$dokumen->id_dokumen?>">

                                            <div class="form-group">
                                                <label>Nama </label>
                                                <input required type="text" value="<?=$dokumen->nama?>" autocomplete='off' name='nama' class='form-control required'>
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
                                        <p>Pada halaman ini anda dapat mengubah data jenis dokumen </p>                                                                                
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
    </body>
</html>