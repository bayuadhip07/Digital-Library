<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $this->load->view('include/head');
    ?>
</head>

<body>
	
	<div id="page" class="theia-exception">
		
	<header class="header menu_2">
		<!-- <div id="preloader"><div data-loader="circle-side"></div></div>/Preload -->
        <?php
            $this->load->view('include/header');
        ?>
	</header>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>SURAT BEBAS PUSTAKA</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->
		<div class="container margin_60_35">
			<div class="row">
                <div id="form_container" class="col-lg-6">
                    <br>
                    <h4><center>Silakan Isi Biodata Berikut</center></h4>
                    <form method="POST" action="<?=site_url('topdf')?>" enctype="multipart/form-data">
                            <input id="website" name="website" type="text" value="">
                        <div class="col-12">
                            <input type="text" name="nama" required="" class="form-control required" placeholder="Nama">
                        </div>
                        <div class="col-12">
                            <input type="text" name="nim" required="" class="form-control required" placeholder="NIM/NPM">
                        </div>
                        
                        <div class="col-12 select">
							<div class="styled-select">
								<select class="required" name="jenjang" id="jenjang">
									<option value="" selected="">Pilih Jenjang</option>
                                    <?php
                                        foreach ($jenjang as $a) 
                                        {
                                        echo "<option value='$a[jenjang]'>$a[jenjang]</option>";
                                        }
                                    ?>
								</select>
							</div>
                        </div>
                        <br>
                        <div class="col-12 select">
							<div class="styled-select">
								<select class="required" name="fakultas" id="fakultas">
									<option value="" selected="">Pilih Fakultas</option>
                                    <?php
                                        foreach ($fakultas as $a) 
                                        {
                                        echo "<option value='$a[fakultas]'>$a[fakultas]</option>";
                                        }
                                    ?>
								</select>
							</div>
                        </div>
                        <br>
                        <div class="col-12 select">
							<div class="styled-select">
								<select class="required" name="prodi" id="prodi">
									<option value="" selected="">Pilih Program Studi</option>
                                    <?php
                                        foreach ($prodi as $a) 
                                        {
                                        echo "<option value='$a[prodi]'>$a[prodi]</option>";
                                        }
                                    ?>
								</select>
							</div>
						</div><br>
                        <div class="col-12">
                            <input type="email" name="email" required="" class="form-control required" placeholder="E-mail">
                        </div>
                        <div class="col-12">
                            <input type="number" name="no_hp" required="" class="form-control required" placeholder="No. HP">
                        </div>
                        <div class="col-12">
                            <input type="text" name="alamat" required="" class="form-control required" placeholder="Alamat">
                        </div>
                        <div class="col-12">
                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Kirim</button>
                        </div>
                        <br>
                    </form>    
				</div>
            </div>

			<!-- /row -->
        </div>

		<!-- /container -->
	</main>
	<!--/main-->
	
	<footer>
        <?php
            $this->load->view('include/footer');
        ?>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <?php
        $this->load->view('include/javascript');
    ?>
	
</body>
</html>