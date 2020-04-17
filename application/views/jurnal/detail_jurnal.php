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
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->

		<?php
		$this->load->view('include/header');
		?>
		<!-- /top_menu -->
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Search..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Detail Jurnal</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#data_jurnal">Data Jurnal</a></li>
						<li><a href="#abstract">Abstrak</a></li>
						<li><a href="#download">Unduh File</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-12">
						
						<section id="data_jurnal">
							<h2>Biodata Jurnal</h2>
							<table border='0'>
								<tr>
									<td width='5%' ><h5></h5></td>
									<td width='5%' ><h5>1.</h5></td>
									<td width='15%' ><h5>Judul</h5></td>
									<td width='5%' ><h5>:</h5></td>
									<td><h5><?php cetak($jurnal->judul)?></h5></td>
								</tr>
								<tr>
									<td ><h5></h5></td>
									<td ><h5>3.</h5></td>
									<td ><h5>Email</h5></td>
									<td ><h5>:</h5></td>
									<td><h5><?php cetak($jurnal->email)?></h5></td>
								</tr>
								<tr>
									<td ><h5></h5></td>
									<td ><h5>4.</h5></td>
									<td ><h5>Tahun</h5></td>
									<td ><h5>:</h5></td>
									<td><h5><?php cetak($jurnal->tahun)?></h5></td>
								</tr>
								<tr>
									<td ><h5></h5></td>
									<td ><h5>5.</h5></td>
									<td ><h5>ISSN</h5></td>
									<td ><h5>:</h5></td>
									<td><h5><?php cetak($jurnal->issn)?></h5></td>
								</tr>
								<tr>
									<td ><h5></h5></td>
									<td ><h5>6.</h5></td>
									<td ><h5>ISBN</h5></td>
									<td ><h5>:</h5></td>
									<td><h5><?php cetak($jurnal->isbn)?></h5></td>
								</tr>
							</table><br><br>
						</section>
						<!-- /section -->
						
						<section id="abstract">
							<div class="intro_title">
								<h2>Abstrak</h2>
								<table border='0'>
									<tr>
										<td width='5%' ><h5></h5></td>
										<td ><h5><?php cetak($jurnal->abstrak)?></h5></td>
									</tr>
								</table><br>,<br>
							</div>
							
						</section>
						<!-- /section -->
						
						<section id="download">
							<h2>Unduh File</h2>
							<div class="reviews-container">
								<div class="row">
									<div class="col-lg-12">
										<div id="review_summary">
										<a href="<?php echo site_url('upload/dokumen/jurnal/'.$jurnal->pdf_jurnal)?>"><h4><?php cetak($jurnal->judul)?></h4></a>
										</div>
									</div>
								</div>
							</div>
							<hr>
						</section>
						<!-- /section -->
					</div>
					<!-- /col -->					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
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