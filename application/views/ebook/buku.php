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
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		<div class="container margin_60_35">
			<div class="box_list wow">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_1.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<h2><strong>Judul</strong></h2>
							<small>Category</small>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
						</div>
						<ul>
							<li><a href="detail_ebook">Lihat Selengkapnya</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list wow">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_2.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="price">$25</div>
							<small>Category</small>
							<h3>At deseruisse scriptorem</h3>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list wow">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_3.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="price">$120</div>
							<small>Category</small>
							<h3>Ea vel semper quaerendum</h3>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list wow">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_4.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="price">$54</div>
							<small>Category</small>
							<h3>Ei has exerci graecis</h3>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list wow">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<a href="course-detail.html"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_5.jpg" class="img-fluid" alt=""></a>
							<div class="preview"><span>Preview course</span></div>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="price">$60</div>
							<small>Category</small>
							<h3>Decore tractatos</h3>
							<p>Dicam diceret ut ius, no epicuri dissentiet philosophia vix. Id usu zril tacimates neglegentur. Eam id legimus torquatos cotidieque, usu decore percipitur definitiones ex, nihil utinam recusabo mel no. </p>
							<div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><i class="icon_like"></i> 890</li>
							<li><a href="course-detail.html">Enroll now</a></li>
						</ul>
					</div>
				</div>
			</div>
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