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
                                    <h4 class="page-title float-left">Detail Jurnal</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin")?>">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin/journal_admin")?>">List Jurnal</a></li>
                                        <li class="breadcrumb-item"><a href="">Detail Jurnal</a></li>
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


                                        <table class='table'>
                                            <br><br>
                                            <tr>
                                                <td style='width:20%'>Judul</td>
                                                <td>: <?php cetak($jurnal->judul)?></td>                                                
                                            </tr>
                                            <tr>
                                                <td>Penulis</td>
                                                <td>: <?php cetak($jurnal->penulis)?></td>                                                
                                            </tr>
                                            <tr>
                                                <td>Tahun Terbit</td>
                                                <td>: <?php cetak($jurnal->tahun)?></td>                                                
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>: <?php cetak($jurnal->email)?></td>
                                            </tr>
                                            <tr>
                                                <td>ISSN</td>
                                                <td>: <?php cetak($jurnal->issn)?></td>
                                            </tr>
                                            <tr>
                                                <td>ISBN</td>
                                                <td>:  <?=$jurnal->isbn?></td>
                                            </tr>
                                            <tr>
                                                <td>Abstrak</td>
                                                <td>: <?php cetak($jurnal->abstrak)?></td>
                                            </tr>
                                        </div>
                                        </table>
                                        <a href="<?php echo site_url('upload/dokumen/jurnal/'.$jurnal->pdf_jurnal)?>" class='btn btn-block btn-info'>Download PDF</a>
                                    </div>
                                </div>
                            </div>               


                            <div class='col-md-4'>
                                <div class='card mb-20'>
                                    <div class='card-body'>
                                        <a href="<?php echo site_url('admin/edit_journal/'.$jurnal->id_jurnal)?>" class='btn btn-block btn-info'>Edit Data</a>
                                        <a href="<?php echo site_url('proses/hapus_jurnal/'.$jurnal->id_jurnal)?>" class='btn btn-block btn-danger'>Hapus Data</a>
                                        <br>
                                        <h5 class='card-title'>Informasi</h5>
                                        <p>Pada halaman ini anda dapat melihat deskripsi jurnal</p>                                                                                
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