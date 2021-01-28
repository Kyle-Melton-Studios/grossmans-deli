<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="description" content="<?= $Wcms->page('description') ?>">
		<meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

		<meta property="og:url" content="<?= $this->url() ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
		<meta property="og:title" content="<?= $Wcms->page('title') ?>" />
		<meta name="twitter:site" content="<?= $this->url() ?>" />
		<meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
		<meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

		<title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

		<!-- CSS -->
		<link rel="stylesheet" rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
		<!-- AnimateCSS -------------------->
		<link rel="stylesheet" rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
		<!-- FontAwesome Icons -------------------->
		<link rel="stylesheet" rel="preload" as="style" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<!-- AOS Stylesheet -------------------->
		<link rel="stylesheet" rel="preload" as="style" href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" />
		<!-- Paver Stylesheet -------------------->
		<link rel="stylesheet" rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/paver/1.3.4/css/paver.min.css" />
		<!-- Custom Stylesheet -------------------->
		<link rel="stylesheet" rel="preload" as="style" href="styles/custom.css" />
		<link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('styles/custom.css') ?>">

		<?= $Wcms->css() ?>

	</head>

	<body class="animated fadeIn" style="background-color: #ecf0f1;">
		<?= $Wcms->settings() ?>
		<?= $Wcms->alerts() ?>

		<div class="second-nav text-right fancy-text d-none d-md-block">
				<p class="find-us"><strong><i class="fas fa-map-marker-alt"></i></strong> <a href="https://www.google.com/maps/dir/''/grossmans+deli/data=!4m5!4m4!1m0!1m2!1m1!1s0x89c22f5cdadd5e97:0x2bca21c2b6f0f014?sa=X&ved=0ahUKEwjjkZOK7cHbAhWJo1kKHUf9DnoQ9RcIgAEwDA">2005 NJ-35, Oakhurst, NJ 07755</a>						&nbsp; &#124; &nbsp; <strong><i class="fa fa-phone"></i></strong> <a href="tel:732-531-4790">(732) 531-4709</a></p>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark" id="home">
				<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="fa fa-bars" aria-hidden="true"></i></span>
  </button>
				<div class="collapse navbar-collapse" id="mainNav">
						<ul class="navbar-nav ml-auto fancy-text">
						<?= $Wcms->menu() ?>
								<li class="nav-item ordering">
										<span class="btn btn-success" data-glf-cuid="b81d1de4-4043-4507-9c33-0cf1652b7979" data-glf-ruid="b9042c35-a90c-43d8-8407-e4ceeddd3bc2">Order <i class="fas fa-utensils"></i></span>
										<script src="https://www.fbgcdn.com/widget/js/ewm2.js" defer async></script>
										<a class="btn btn-outline-light nav-link my-2 my-sm-0 d-md-none" id="navbtn2" href="tel:732-531-4790">Call Us <i class="fa fa-phone"></i></a>
								</li>
						</ul>
				</div>
		</nav>
		<div class="slides">
				<div id="main_slider" class="carousel slide main_header" data-ride="carousel">

						<!-- The slideshow -->
						<div class="carousel-inner">
								<div class="carousel-item active">
										<img class="d-block img-fluid" src="/img/deli-lunch.jpg" alt="">
								</div>
								<div class="carousel-item">
										<img class="d-block img-fluid" src="/img/deli-counter.jpg" alt="">
								</div>
								<div class="carousel-item">
										<img src="/img/fresh-bread.jpg" alt="">
								</div>
								<div class="carousel-item">
										<img src="/img/jersey-devil-sandwich-grossmans-deli.jpg" alt="">
								</div>
						</div>
				</div>
		</div>

		<section class="container mt-5 mb-5">
			<div class="row">
				<div class="col-lg-12 my-auto text-center padding40">
					<?= $Wcms->page('content') ?>

				</div>
			</div>
		</section>

		<div class="h-05"></div>

		<section class="container-fluid mt-5 mb-5 flex-grow">
			<div class="row customBackground">
				<div class="col-lg-12 my-auto text-center padding40 resetTextRotation">
					<?= $Wcms->block('subside') ?>

				</div>
			</div>
		</section>

		<footer class="mt-4 footer">
			<div class="container-fluid py-3 text-right">
				<?= $Wcms->footer() ?>
			</div>
		</footer>
		<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
		<!-- jQuery/Popper.js/Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script>		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/paver/1.3.4/js/jquery.paver.js"></script>
		<script src="scripts/jquery.easeScroll.js"></script>
		<script src="scripts/index.js"></script>
		<script>
				$(function() {
						// Paver
						$('div.panorama').paver({
								// Display settings
								meta: false,
								responsive: true,
								startPosition: 0.5,
								// Minimum overflow before panorama gets converted into a Paver instance
								minimumOverflow: 200,
								// Performance
								grain: 3,
								cursorThrottle: (1000 / 60),
								gyroscopeThrottle: (1000 / 60),
								resizeThrottle: 500,
								// For mousemove event
								mouseSmoothingFunction: 'linear',
								// For deviceOrientationEvent
								tilt: false,
						});
				});
		</script>
		<script defer>
				$(document).ready(function() {
						$('[data-toggle="tooltip"]').tooltip();
				});
				$(document).ready(function() {
						$('input[type="checkbox"]').click(function() {
								var inputValue = $(this).attr("value");
								$("." + inputValue).toggle();
						});
				});
		</script>
		<script type="application/ld+json">
				{
						"@context": "http://schema.org",
						"@type": "Restaurant",
						"name": "Grossman's Deli & Grill",
						"image": "http://www.grossmansdeli.com/img/deli.png",
						"@id": "",
						"url": "http://www.grossmansdeli.com",
						"telephone": "732) 531-4709",
						"priceRange": "$$",
						"menu": "http://www.grossmansdeli.com/menu",
						"servesCuisine": "Deli",
						"address": {
								"@type": "PostalAddress",
								"streetAddress": "2005 NJ-35",
								"addressLocality": "Oakhurst",
								"addressRegion": "NJ",
								"postalCode": "07755",
								"addressCountry": "US"
						},
						"geo": {
								"@type": "GeoCoordinates",
								"latitude": 40.2640349,
								"longitude": -74.04093130000001
						},
						"openingHoursSpecification": [{
								"@type": "OpeningHoursSpecification",
								"dayOfWeek": [
										"Tuesday",
										"Wednesday",
										"Thursday",
										"Friday"
								],
								"opens": "07:30",
								"closes": "19:00"
						}, {
								"@type": "OpeningHoursSpecification",
								"dayOfWeek": "Saturday",
								"opens": "09:00",
								"closes": "16:00"
						}, {
								"@type": "OpeningHoursSpecification",
								"dayOfWeek": "Monday",
								"opens": "07:30",
								"closes": "15:00"
						}],
						"sameAs": "https://www.facebook.com/grossmansdeli/"
				}
		</script>
		<?= $Wcms->js() ?>

	</body>
</html>
