<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $this->load->view('include/head');
    ?>
</head>

<body>
	
	<!-- <div id="preloader">
		<div data-loader="circle-side"></div>
	</div> -->
	<!-- End Preload -->
	
	<header class="header fadeInDown">
        <?php
            $this->load->view('include/header');
        ?>
	</header>
	<!-- /header -->
	
	<div id="main_menu">
        <?php
            $this->load->view('include/dashboard');
        ?>
	</div>
	<!-- /main_menu -->
	
	<main>
		<section class="header-video">
			<div id="hero_video">
				<div>
					<h3><strong>UNSIKA</strong><br>Digital Library</h3>
				</div>
				<a href="#footer" class="btn_explore hidden_tablet"><i class="ti-arrow-down"></i></a>
			</div>
			<img src="<?=base_url("assets/img/video_fix.png")?>" alt="" class="header-video--media" data-video-src="<?=base_url("assets/video/intro")?>" data-teaser-source="<?=base_url("assets/video/intro")?>" data-provider="" data-video-width="1920" data-video-height="960">
		</section>
		<!-- /header-video -->

		<ul id="grid_home" class="clearfix">
			<li>
				<a href="<?=base_url('home/jurnal')?>"  class="img_container">
					<div class="short_info">
						<h3><strong>Journal</strong></h3>
						<div><span class="btn_1 rounded">Lihat Selengkapnya</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="<?=base_url('home/buku')?>" class="img_container">
					<div class="short_info">
						<h3><strong>E-Book</strong></h3>
						<div><span class="btn_1 rounded">Lihat Selengkapnya</span></div>
					</div>
				</a>
			</li>
			<li>
				<a href="<?=base_url('home/skripsi')?>" class="img_container">
					<div class="short_info">
						<h3><strong>Skripsi</strong></h3>
						<div><span class="btn_1 rounded">Lihat Selengkapnya</span></div>
					</div>
				</a>
			</li>
		</ul>
		<!--/grid_home -->
	</main>
	<!-- /main -->
	
	<footer id="footer">
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
	</div><!-- End Search Menu -->
	
	<!-- COMMON SCRIPTS -->
    <?php
        $this->load->view('include/javascript');
    ?>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="<?=base_url("assets/js/video_header.js")?>"></script>
	<script>
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>

</body>
</html>