<div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
    <a href="<?=base_url("admin")?>" class="logo">
        <img src="<?=base_url("assets/img/logo.png")?>" width="50" height="50" data-retina="true" alt="">
    </a>
</div>

<nav class="navbar-custom">

    <ul class="list-inline float-right mb-0">

        <li class="list-inline-item dropdown notification-list">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
                <img src="<?=base_url('assets/admin/images/users/avatar-1.jpg')?>" alt="user" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="text-overflow"><small>Selamat Datang <?=$this->ion_auth->user()->row()->username?></small> </h5>
                </div>

                <!-- item-->
                <a href="#" class="dropdown-item notify-item" data-toggle="modal" data-target="#myModal">
                    <i class="zmdi zmdi-lock"></i> <span>Ubah Kata Sandi</span>
                </a>

                <!-- item-->
                <a href="<?= site_url('auth/logout/')?>" class="dropdown-item notify-item">
                    <i class="zmdi zmdi-power"></i> <span>Keluar</span>
                </a>

            </div>
        </li>

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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Kata Sandi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?=form_open('proses/update_password');?>
                <div class='form-group'>
                    <label>Kata Sandi Lama</label>                                            
                    <input type="password" name='old_password' class='form-control' autocomplete='off'>                                            
                </div>                                        
                <div class='form-group'>
                    <label>Kata Sandi Baru</label>                                            
                    <input type="password" name='new_password' class='form-control' autocomplete='off'>
                </div>
                <div class='form-group'>
                    <label>Konfirmasi Sandi Baru</label>                                            
                    <input type="password" name='confirm_password' class='form-control' autocomplete='off'>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>