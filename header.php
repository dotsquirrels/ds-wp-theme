<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
	</script>
	<![endif]-->
	<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/js/owl/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/styles.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/brandon-grotesque.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/js/owl/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/js/owl/assets/owl.theme.default.min.css">
	<link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory') ?>/img/favicon.png">
	<!--[if gte IE 9]>
	  <style type="text/css">
		#gradient {
		   filter: none;
		}
	  </style>
	<![endif]-->

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php include_once('fragment-nav.php'); ?>
	
	<a name="top"></a>
	
	<header>

	  <div class="outer-wrapper">
		<div class="inner-wrapper">
			<div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/img/new-clean-logo.png" /></a></div>
			<div class="nav">
			  <a href="<?php echo get_site_url(); ?>/#capabilities">Capabilities</a>
			  <a href="<?php echo get_site_url(); ?>/#contact">Contact</a>
			  <a href="<?php echo get_site_url(); ?>/about/">About Us</a>
			</div>
		</div>
	  </div>

	</header>

	<?php if (is_front_page()) { ?>

	<div id="feature_panel" class="owl-carousel" style="">
	
		<div class="item" style="background-image: url('<?php bloginfo('stylesheet_directory') ?>/img/fpo-pickle.jpg');">
		  <div class="banner">
			<span class="headline">Featured Work</span><br/>
			<span class="project">Pickle Day Website</span> For <span class="client">Lower East Side Partnership</span>
		  </div>
		</div>

		<div class="item" style="background-image: url('<?php bloginfo('stylesheet_directory') ?>/img/fpo-pickle.jpg');">
		  <div class="banner">
			<span class="headline">Featured Work</span><br/>
			<span class="project">Pickle Day Website</span> For <span class="client">Lower East Side Partnership</span>
		  </div>
		</div>

		<div class="item" style="background-image: url('<?php bloginfo('stylesheet_directory') ?>/img/fpo-pickle.jpg');">
		  <div class="banner">
			<span class="headline">Featured Work</span><br/>
			<span class="project">Pickle Day Website</span> For <span class="client">Lower East Side Partnership</span>
		  </div>
		</div>

	</div>

	<script type="text/javascript">

	$(document).ready(function() {

		$(".owl-carousel").owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoWidth: false,
			autoplay: true,
			autoplayTimeout: 4000,
			responsive:{
				0:{
					items:1
				},
			}
		});

		$("a").on("click", function(event) {
			if (this.hash !== "") {
				event.preventDefault();
				var hash = this.hash;
				$("html, body").animate({
					scrollTop: $(hash).offset().top
				}, 400, function() {
					window.location.hash = hash;
				});
			}
		});

	});

	</script>

	<?php } ?>

	<div class="container" id="gradient">
