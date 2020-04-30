<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		$this->load->view('include/head');
	?>

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	
	<header class="header fadeInDown">
	<!-- <div id="preloader"><div data-loader="circle-side"></div></div> -->
        <?php
			if(!$this->ion_auth->logged_in())
			{
				$this->load->view('include/header');
			}
			else
			{
				$this->load->view('user/include/header');
			}
        ?>
	</header>
	<!-- /header -->
	<div id="main_menu">
        <?php
            $this->load->view('include/dashboard');
        ?>
	</div>
	
	<main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>List E - Book</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix ">
					<li class="float-right">
					<?=form_open_multipart('proses/search_ebook') ?>
					<div class="form-inline">
							<div class="form-group">
                                <input required type="text" name='keyword' placeholder="Kata Kunci..." class='form-control-plaintext col-md-12'>
								<hr>
                            </div>				
							<button  type="submit" class="btn btn-success waves-effect waves-light">Cari</button>
					</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- /filters -->

		<?php foreach ($ebook as $j): ?>
		<div class="container margin_60_35">
			<div class="box_list wow">
				<!-- <div class="row no-gutters"> -->
					<div class="col-lg-12">
						<div class="wrapper">
							<h2><?=$j->judul?></h2>
							<h5><?=$j->penulis?></h5>
							<!-- <small>Jurnal</small> -->
							<p><?=$j->sinopsis?></p>
						</div>
						<ul>
							<li><?= $j->tahun ?></li>
							<li><a href="<?=site_url('home/detail_ebook/'.$j->id_buku)?>">Baca Selengkapnya</a></li>
						</ul>
					</div>
				</div>
			<!-- </div> -->
		</div>
		<?php endforeach;?>

	</main>
	<!--/main-->
	
	<footer>
		<?php
			$this->load->view('include/footer');
		?>
	</footer>
	<!--/footer-->
	
	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_search"></i>
			</button>
		</form>
	</div><!-- / Search Menu -->

	<!-- COMMON SCRIPTS -->
	<?php
		$this->load->view('include/javascript');
	?>
  
</body>
</html>