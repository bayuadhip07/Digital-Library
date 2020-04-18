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
                                    <h4 class="page-title float-left">Profil</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin")?>">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin/anggota")?>">List Anggota</a></li>
                                        <li class="breadcrumb-item"><a href="">Profil</a></li>
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

                                        
                                        <div class='text-center'>
                                            <img src="<?=site_url('upload/foto/'.$anggota->foto)?>" alt="" class='img-fluid' style='max-height:200px'>
                                        </div>

                                        <table class='table'>
                                            <br><br>
                                            <tr>
                                                <td style='width:20%'>Nama</td>
                                                <td>: <?php cetak($anggota->nama)?></td>                                                
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <td>: <?php cetak($anggota->agama)?></td>                                                
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>: <?php cetak($anggota->jenis_kelamin)?></td>                                                
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>: <?php cetak($anggota->alamat)?></td>
                                            </tr>
                                            <tr>
                                                <td>Universitas</td>
                                                <td>:  <?=$anggota->nama_univ?></td>
                                            </tr>
                                            <tr>
                                                <td>Fakultas</td>
                                                <td>: <?php cetak($anggota->fakultas)?></td>
                                            </tr>
                                            <tr>
                                                <td>Program Studi</td>
                                                <td>: <?php cetak($anggota->prodi)?></td>
                                            </tr>
                                            <tr>
                                                <td>NIM</td>
                                                <td>:  <?=$anggota->nim?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>: <?php cetak($anggota->email)?></td>
                                            </tr>
                                            <tr>
                                                <td>No. HP</td>
                                                <td>: <?php cetak($anggota->phone)?></td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>: <?php cetak($anggota->status)?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>               


                            <div class='col-md-4'>
                                <div class='card mb-20'>
                                    <div class='card-body'>
                                        <a href="<?php echo site_url('admin/edit_anggota/'.$anggota->id_anggota)?>" class='btn btn-block btn-info'>Edit Data</a>
                                        <a href="<?php echo site_url('proses/hapus_anggota/'.$anggota->id_anggota)?>" class='btn btn-block btn-danger'>Hapus Data</a>
                                        <br>
                                        <h5 class='card-title'>Informasi</h5>
                                        <p>Pada halaman ini anda dapat melihat profil anggota</p>                                                                                
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