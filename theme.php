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

		<footer class="footer">
				<div class="container pt-2 pb-5">
						<div class="row">
								<div class="col-lg-4 pt-5">
										<div class="footer-inner">
												<p class="footer-title fancy-text"><strong>Grossman's Deli & Grill</strong></p>
												<hr class="white-hr">
												<p><span class="icon"><i class="fas fa-map-marker-alt"></i></span> &nbsp; 2005 NJ-35, Oakhurst, NJ 07755</p>
												<p><span class="icon"><i class="fa fa-phone"></i></span> &nbsp; (732) 531-4709</p>
												<p><strong>Hours:</strong><?= $Wcms->block('subside') ?></p>
				
												<span>
									<a href="https://www.facebook.com/grossmansdeli/"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i></a> &nbsp;
									<a href="https://www.instagram.com/grossmansdeli/"><i class="fab fa-instagram fa-2x" aria-hidden="true"></i></a> &nbsp;
									<a href="https://www.yelp.com/biz/grossmans-deli-oakhurst-2"><i class="fab fa-yelp fa-2x"></i></a>
									</span>
										</div>
								</div>
								<div class="col-lg-4 pt-5">
										<div class="footer-inner">
												<p class="footer-title fancy-text"><strong>Join Our Newsletter</strong></p>
												<hr class="white-hr">
												<!-- Begin MailChimp Signup Form -->
												<div id="mc_embed_signup">
														<form action="https://grossmansdeli.us18.list-manage.com/subscribe/post?u=671ab84284e3a222afe57c7da&amp;id=bc4fed00a3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
																<div id="mc_embed_signup_scroll">

																		<div class="mc-field-group">
																				<label class="pb-2" for=""><strong>Sign Up!</strong></label>
																				<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL" placeholder="Enter your Email address here">
																		</div>
																		<div id="mce-responses" class="clear">
																				<div class="response" id="mce-error-response" style="display:none"></div>
																				<div class="response" id="mce-success-response" style="display:none"></div>
																		</div>
																		<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
																		<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_671ab84284e3a222afe57c7da_bc4fed00a3" tabindex="-1" value=""></div>
																		<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-success mt-2"></div>
																</div>
														</form>
												</div>

												<!--End mc_embed_signup-->
												<br>

												<p class="pt-4"><strong>Now Accepting:</strong></p>
												<span>
									<i class="far fa-money-bill-alt fa-2x"></i> &nbsp;
									<i class="fab fa-cc-visa fa-2x"></i> &nbsp;
									<i class="fab fa-cc-mastercard fa-2x"></i> &nbsp;
									<i class="fab fa-cc-amex fa-2x"></i> &nbsp;
								  <i class="fab fa-cc-apple-pay fa-2x"></i> &nbsp;
									<i class="fab fa-android fa-2x"></i>
									</span>
										</div>
								</div>
								<div class="col-lg-4 pt-5">
										<div class="footer-inner">
												<p class="footer-title fancy-text"><strong>Latest News</strong></p>
												<iframe defer src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgrossmansdeli%2F&tabs=timeline&width=340&height=400&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="400"
												  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
										</div>
								</div>
						</div>
				</div>
				<div class="container-fluid pt-3 mt-5 copy">
						<div class="row">
								<div class="col-12 text-center">
										<p>&copy; 2018 Grossman's Deli & Grill - All rights reserved.</p>
								</div>
						</div>
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
