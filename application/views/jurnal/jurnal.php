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
	<!-- End Preload -->
	
	<header class="header fadeInDown">
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
					<h1 class="fadeInUp"><span></span>List Jurnal</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<!-- <div class="filters_listing sticky_horizontal">
			<div class="container">
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="popular" name="listing_filter" value="popular">
							<label for="popular">Popular</label>
							<input type="radio" id="latest" name="listing_filter" value="latest">
							<label for="latest">Latest</label>
						</div>
					</li>
				</ul>
			</div> -->
			<!-- /container -->
		</div>
		<!-- /filters -->

		<?php foreach ($jurnal as $j): ?>
		<div class="container margin_60_35">
			<div class="box_list wow">
				<!-- <div class="row no-gutters"> -->
					<div class="col-lg-12">
						<div class="wrapper">
							<h2><?=$j->judul?></h2>
							<h5><?=$j->penulis?></h5>
							<!-- <small>Jurnal</small> -->
							<p><?=$j->abstrak?></p>
						</div>
						<ul>
							<li><?= $j->tahun ?></li>
							<li><a href="<?=site_url('home/detail_jurnal/'.$j->id_jurnal)?>">Baca Selengkapnya</a></li>
						</ul>
					</div>
				</div>
			<!-- </div> -->
		</div>
		<?php endforeach;?>
			<!-- /box_list -->
			
			<p class="text-center add_top_60"><a href="#0" class="btn_1">Load more</a></p>
		</div>
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