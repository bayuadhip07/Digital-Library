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
                                        
                                        <?=form_open_multipart('proses/update_anggota/')?>
                                            <input type="hidden" name='id' value="<?=$anggota->id_anggota?>">
                                            <!-- <?php
                                                echo json_encode("$anggota->id_anggota");
                                            ?> -->
                                            <div class="form-group">
                                                <label>Nama UMKM</label>
                                                <input required type="text" autocomplete='off' name='nama' class='form-control' value="<?php cetak($anggota->nama)?>">
                                            </div>

                                            <div class='form-group'>
                                                <label>Email</label>
                                                <input required type="email" autocomplete='off' name='email' class='form-control' value="<?php cetak($anggota->email)?>">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input required type="text" autocomplete='off' name='username' class='form-control' value="<?php cetak($anggota->username)?>">
                                                <p class="text-muted">*Lower case</p>
                                            </div>

                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <textarea name="deskripsi" class='form-control' cols="30" rows="5"><?php cetak($anggota->deskripsi_toko)?></textarea>
                                            </div>

                                            <div class='form-group'>
                                                <label>Alamat</label>
                                                <input required type="text" autocomplete='off' name='alamat' class='form-control' placeholder="Kecamatan, Kabupaten" value="<?php cetak($anggota->alamat)?>">
                                            </div>

                                            <div class="form-group">
                                                <label>No. Whatsapp</label>
                                                <input required type="text" name='no_wa' class='form-control' autocomplete='off' placeholder="08...." value="<?php cetak($anggota->no_wa)?>">
                                            </div>

                                            <input type="hidden" name='foto_lama' value="<?=$anggota->logo?>">
                                            <div class='form-group'>
                                                <label>Logo</label>
                                                <input type="file" class='dropify' data-file-max-size="2M" name='logo' data-default-file='<?=site_url('upload/logo/'.$anggota->logo)?>'>
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
                                        <a href="<?php echo site_url('modul/add_user/')?>" class='btn btn-block btn-info'>Tambah Anggota</a>
                                        <br>
                                        <h5 class='card-title'>Informasi</h5>
                                        <p>Pada halaman ini anda dapat melihat daftar anggota perpustakaan digital UNSIKA</p>                                                                                
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

        <script>
            $(document).ready(function() {
                
                // Default Datatable
                $('#datatable').DataTable();                
                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
                    
                $(document).on('click', '.hapus', function(e){
                    var c = confirm("Yakin menghapus data?");
                    if(c){
                        return true;
                        var c=false;
                        if (!c) {
                            c=true;
                            return true;
                        }
                    }else{
                        return false;
                    }                                        
                });
            } );            

        </script>
    </body>
</html>