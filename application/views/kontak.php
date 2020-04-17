<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        $this->load->view('include/head');
    ?>
</head>

<body>
	
	<div id="page">
		
	<header class="header menu_2">
		<!-- <div id="preloader"><div data-loader="circle-side"></div></div>/Preload -->
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
	
	<main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>KONTAK KAMI</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Alamat</h4>
						<span>Universitas Singaperbangsa Karawang<br>Jl. H.S. Ronggowaluyo</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4>E-mail</h4>
						<span><a href="mailto:bayuadhip01@gmail.com">bayuadhip01@gmail.com</a><br><small>Senin - Jum'at </small></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Telephone</h4>
						<span><a href="tel://082242484585">+ 62 82242484585</a><br><small>Senin - Jumat<br> 08.00-16.00</small></span>
					</li>
				</ul>
			</div>
		</div>
		<!--/contact_info-->
		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
			</nav>
		</div>

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