<?php
	$id = $this->ion_auth->user()->row()->id;
 	$anggota = $this->anggota_model->get_anggota_by_id_user($id);
    $univ = $this->umum_model->get_univ();
    $agama = $this->umum_model->get_agama();
	$fakultas = $this->umum_model->get_fakultas();
	$prodi = $this->umum_model->get_prodi();
	$jenkel = $this->umum_model->get_jenkel();
	 // echo json_encode($anggota);
?>

<div id="logo">
	<a href="<?=base_url('user')?>"><img src="<?=base_url("assets/img/logo.png")?>" width="40" height="40" data-retina="true" alt=""></a>
</div>
				
		<ul id="top_menu">			
            <!-- <li><a href="#0" class="search-overlay-menu-btn">Search</a></li> -->
			<li class="btn_1 rounded"><a href="<?=base_url('user')?>" >Home</a></li>
			<div class="hamburger hamburger--spin" >
						<font color='white'><strong>DOKUMEN</strong></font>
			</div>
			<li></li>
            <li><a href="<?=base_url('home/kontak')?>" >Kontak</a></li>
			<li class="hidden_tablet"><a href="<?=base_url('user/bebas_pustaka')?>">Bebas Pustaka</a></li>
			<li>
				<!-- <div class="hamburger hamburger--spin">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div> -->
			</li>
		</ul>
	<div>
		<ul class="list-inline float-right mb-0">

				<li class="list-inline-item dropdown notification-list">
					<a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
					aria-haspopup="false" aria-expanded="false">
						<img src="<?=site_url('upload/foto/'.$anggota->foto)?>" width="30" height="30" alt="user" class="rounded-circle">
					</a>
					<div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
						<!-- item-->
						<div class="dropdown-item noti-title">
							<h5 class="text-overflow"><small><strong><?=$this->ion_auth->user()->row()->first_name?></strong></small> </h5>
						</div>

						<!-- item-->
						<a href="#" class="dropdown-item notify-item" data-toggle="modal" data-target="#myModal">
							<i class="zmdi zmdi-setting"></i> <span>Ubah Profil</span>
						</a>

						<!-- item-->
						<a href="<?= site_url('auth/logout/')?>" class="dropdown-item notify-item">
							<i class="zmdi zmdi-power"></i> <span>Keluar</span>
						</a>

					</div>
				</li>

		</ul>
	</div>
		<!-- /top_menu -->

		
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

								<?=form_open_multipart('proses/edit_profil')?>
                                            <input type="hidden" name='id' value="<?=$anggota->id_anggota?>">

                                            <div class="form-group">
                                                <label>Nama </label>
                                                <input required type="text" value="<?=$anggota->nama?>" autocomplete='off' name='nama' class='form-control required'>
                                            </div>

                                            <div class='form-group'>
                                                <label>Agama</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="agama" id="agama">
                                                        <option value="">Pilih Agama</option>
                                                            <?php foreach($agama as $t):?>
                                                                <option value="<?=$t->id_agama?>"
                                                                    <?php if($t->agama == $anggota->agama):?>
                                                                        selected
                                                                    <?php endif;?>
                                                                ><?=$t->agama?></option>
                                                            <?php endforeach;?>
                                                    </select>
							                    </div>
                                            </div>

                                            <div class='form-group'>
                                                <label>Jenis Kelamin</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="jk" id="agama">
                                                        <option value="" >Pilih Jenis Kelamin</option>
                                                            <?php foreach($jenkel as $t):?>
                                                                    <option value="<?=$t->id_jk?>"
                                                                        <?php if($t->id_jk == $anggota->jk):?>
                                                                            selected
                                                                        <?php endif;?>
                                                                    ><?=$t->jenis_kelamin?></option>
                                                                <?php endforeach;?>
                                                    </select>
							                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input required type="text" value="<?=$anggota->alamat?>" autocomplete='off' name='alamat' class='form-control required'>
                                            </div>

                                            <div class='form-group'>
                                                <label>Universitas</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="univ" id="univ">
                                                        <option value="">Pilih Universitas</option>
                                                        <?php foreach($univ as $t):?>
                                                                <option value="<?=$t->id_univ?>"
                                                                    <?php if($t->id_univ == $anggota->univ):?>
                                                                        selected
                                                                    <?php endif;?>
                                                                ><?=$t->nama_univ?></option>
                                                            <?php endforeach;?>
                                                            <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>

                                            <div class='form-group'>
                                                <label>Fakultas</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="fakultas" id="fakultas">
                                                        <option value="" >Pilih Fakultas</option>
                                                            <?php foreach($fakultas as $t):?>
                                                                    <option value="<?=$t->id_fakultas?>"
                                                                        <?php if($t->fakultas == $anggota->fakultas):?>
                                                                            selected
                                                                        <?php endif;?>
                                                                    ><?=$t->fakultas?></option>
                                                            <?php endforeach;?>
                                                            <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>

                                            <div class='form-group'>
                                                <label>Program Studi</label>
                                 				<div class="styled-select">
                                                    <select class="form-control required" required="" name="prodi" id="prodi">
                                                        <option value="">Pilih Program Studi</option>
                                                            <?php foreach($prodi as $t):?>
                                                                    <option value="<?=$t->id_prodi?>"
                                                                        <?php if($t->prodi == $anggota->prodi):?>
                                                                            selected
                                                                        <?php endif;?>
                                                                    ><?=$t->prodi?></option>
                                                            <?php endforeach;?>
                                                            <option value="Lainnya">Lainnya</option>
                                                    </select>
							                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>NIM</label>
                                                <input required type="text" value="<?=$anggota->nim?>" autocomplete='off' name='nim' class='form-control required'>
                                            </div>

                                            <div class='form-group'>
                                                <label>E-mail</label>
                                                <input required type="email" value="<?=$anggota->email?>" autocomplete='off' name='email' class='form-control required' placeholder="">
                                            </div>

                                            <div class="form-group">
                                                <label>No. HP</label>
                                                <input required type="number" value="<?=$anggota->phone?>" name='no_hp' class='form-control required' autocomplete='off' placeholder="">
                                            </div>
                                            <!-- <input type="hidden" name='password_lama' value="<?=$anggota->password?>"> -->
                                
                                            <div class="form-group">
                                                <label>Kata Sandi</label>
                                                <input type="password" value="<?=$anggota->password?>" name='password' class='form-control required' autocomplete='off' placeholder="">
                                                <small>*Jika tidak ingin mengubah kata sandi,biarkan saja bagian ini</small>
                                            </div>
                                            <input type="hidden" name='foto_lama' value="<?=$anggota->foto?>">
                                            <div class='form-group'>
                                                <label>Foto</label>
                                                <input type="file" class='dropify' data-file-max-size="2M" name='foto' data-default-file='<?=site_url('upload/foto/'.$anggota->foto)?>'>
                                                <br>
                                                <small>* Ukuran foto maksimal 2 MB</small><br>
                                                <small>* Kosongkan jika tidak ingin ganti foto profil</small>
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