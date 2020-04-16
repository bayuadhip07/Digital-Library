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
                                    <h4 class="page-title float-left">List Jurnal</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="<?=base_url("admin")?>">Beranda</a></li>
                                        <li class="breadcrumb-item"><a href="">List Jurnal</a></li>
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
                                        <h5 class='card-title'>Daftar Jurnal</h5>
                                        <?php $no=1;?>
                                        <table id='datatable' class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th><center>No</center></th>                                        
                                                    <th><center>Judul Jurnal</center></th>
                                                    <th><center>Tahun Terbit</center></th>                                      
                                                    <th><center>Penulis</center> </th>                                                                                                                                                                                                                              
                                                    <th><center>Action</center></th>    
                                                </tr>
                                            </thead>                                            
                                            <tbody>   

                                                <!-- Looping list jurnal -->
                                                <?php foreach($jurnal as $t):?>                                                
                                                    <tr>
                                                        <td><center><?=$no?></center></td>
                                                        <td><a href="<?=site_url('admin/detail_journal/'.$t->id_jurnal)?>"><center><?=$t->judul?></center></a></td>
                                                        <td><center><?=$t->tahun?></center></td>
                                                        <td><center><?=$t->penulis?></center></td>
                                                        <td>
                                                            <center>
                                                                <a href="<?=site_url('admin/edit_journal/'.$t->id_jurnal)?>" class='btn btn-info'>Edit</a>
                                                                <a href="<?=site_url('proses/hapus_jurnal/'.$t->id_jurnal)?>" class='btn btn-danger'>Hapus</a>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    <?php $no++;?>
                                                <?php endforeach;?>
                                                <!-- End Looping -->

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class='col-md-4'>
                                <div class='card mb-20'>
                                    <div class='card-body'>
                                        <a href="<?php echo site_url('admin/tambah_journal/')?>" class='btn btn-block btn-info'>Tambah Jurnal</a>
                                        <br>
                                        <h5 class='card-title'>Informasi</h5>
                                        <p>Pada halaman ini anda dapat melihat list jurnal yang sudah di publish pada Digital Library Unsika</p>                                                                                
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