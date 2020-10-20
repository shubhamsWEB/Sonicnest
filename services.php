<!DOCTYPE HTML>
<html>

<head>
	<title>Services | Sonic Nest Beats</title>
	<?php
	include_once 'headtag.php' ?>
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>
	<div class="fh5co-loader"></div>
	<div id="page">
		<?php $active = 'service';
		include_once 'Navbar.php' ?>
		<?php $var = 'Our Services';
		include_once 'header.php' ?>
		<div id="fh5co-team">
			<div class="container">

				<div class="row">
					<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff shadow">
							<div class="icon icon-lg icon-shape icon-shape-dark shadow rounded-circle">
								<i class="fas fa-compact-disc fa-7x"></i>
							</div>
							<h3 class="mt-20">Mixing Mastering</h3>
							<p>
								Get your songs streaming-ready with our professional mixing-mastering services.</p>
							<a href="mixing-mastering.php" class="btn btn-primary btn-outline btn-service" style="font-family: 'Montserrat', sans-serif !important; color: #000"><i class="fas fa-bullseye"></i> <b>Explore</b></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff shadow">
							<div class="icon icon-lg icon-shape icon-shape-dark shadow rounded-circle">
								<i class="fas fa-palette fa-7x"></i>
							</div>
							<h3 class="mt-20">Custom Artwork</h3>
							<p>Add another star to your recording by getting the dopest album artwork service on the Internet!
							</p>
							<a href="custom-artwork.php" class="btn btn-primary btn-outline btn-service" style="font-family: 'Montserrat', sans-serif !important;color: #000"><i class="fas fa-bullseye"></i> <b>Explore</b></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
						<div class="fh5co-staff shadow">
							<div class="icon icon-lg icon-shape icon-shape-dark shadow rounded-circle">
								<i class="fas fa-headphones-alt fa-7x"></i>
							</div>
							<h3 class="mt-20">Custom Beats</h3>
							<p>Can't find a beat that quite fits your composition? Get a custom beat tailor-made for your next song</p>
							<a href="custom-beats.php" class="btn btn-primary btn-outline btn-service" style="font-family: 'Montserrat', sans-serif !important;color: #000"><i class="fas fa-bullseye"></i> <b>Explore</b></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-left fh5co-heading  animate-box">
					<h2 class="reveal">What Our Clients Say</h2>
					<p class="reveal-red">Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>

				</div>
			</div>
			<!-- Slider main container -->
			<div class="swiper-container">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					<!-- Slides -->
					<div class="swiper-slide">
					<div class="col-md-12 col-sm-6 animate-box">
						<div class="testimonial">
							<blockquote>
								<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
								<p class="author"> <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by company"> <cite>&mdash; Mike Adam</cite></p>
							</blockquote>
						</div>
					</div>
					</div>
					<div class="swiper-slide">
					<div class="col-md-12 col-sm-6 animate-box">
						<div class="testimonial">
							<blockquote>
								<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
								<p class="author"> <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by company"> <cite>&mdash; Mike Adam</cite></p>
							</blockquote>
						</div>
					</div>
					</div>
					<div class="swiper-slide">
					<div class="col-md-12 col-sm-6 animate-box">
						<div class="testimonial">
							<blockquote>
								<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
								<p class="author"> <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by company"> <cite>&mdash; Mike Adam</cite></p>
							</blockquote>
						</div>
					</div>
					</div>
					<div class="swiper-slide">
					<div class="col-md-12 col-sm-6 animate-box">
						<div class="testimonial">
							<blockquote>
								<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
								<p class="author"> <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by company"> <cite>&mdash; Mike Adam</cite></p>
							</blockquote>
						</div>
					</div>
					</div>
					<div class="swiper-slide">
					<div class="col-md-12 col-sm-6 animate-box">
						<div class="testimonial">
							<blockquote>
								<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
								<p class="author"> <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by company"> <cite>&mdash; Mike Adam</cite></p>
							</blockquote>
						</div>
					</div>
					</div>
				</div>

				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>
		</div>
		<?php include_once 'footer.php' ?>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script async src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script async src="js/jquery.magnific-popup.min.js"></script>
	<script async src="js/magnific-popup-options.js"></script>
	<!-- Stellar -->
	<script async src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/ScrollTrigger.min.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
		const reveal = gsap.utils.toArray('.reveal, .reveal-red');
		reveal.forEach((text, i) => {
			ScrollTrigger.create({
				trigger: text,
				toggleClass: 'active',
				start: "top 85%",
				end: "top 0%",
				// markers: true
			})
		});

		jQuery(document).ready(function($) {

		});

		var mySwiper = new Swiper('.swiper-container', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
			slidesPerView: window.innerWidth > 500 ? 3 : 1,
			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
		})
	</script>
</body>

</html>