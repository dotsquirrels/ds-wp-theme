<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title(); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
	</script>
	<![endif]-->
	<script src="<?php bloginfo('stylesheet_directory') ?>/js/jquery-2.1.4.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory') ?>/js/hamburger.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/styles.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/brandon-grotesque.css">
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

<body>

	<div class="mobilenav">
		<ul>
			<li><a href="javascript:void(0);">Home</a></li>
			<li><a href="javascript:void(0);">Capabilities</a></li>
			<li><a href="javascript:void(0);">About Us</a></li>
			<li><a href="javascript:void(0);">Tips & Rants</a></li>
			<li class="social-icons">
				<ul>
					<li class="linkdin"><a href="http://www.linkedin.com/company/dot-squirrels-llc" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/img/trans.gif" height="24" width="24" border="0"></a></li>
					<li class="facebook"><a href="http://www.facebook.com/DotSquirrels" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/img/trans.gif" height="24" width="24" border="0"></a></li>
					<li class="twitter"><a href="http://twitter.com/dotsquirrels" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/img/trans.gif" height="24" width="24" border="0"></a></li>
					<li class="instagram"><a href="http://instagram.com/explore/locations/855074924/" target="_blank"><img src="<?php bloginfo('stylesheet_directory') ?>/img/trans.gif" height="24" width="24" border="0"></a></li>
				</ul>			
			</li>
		</ul>
	</div>

	<a href="javascript:void(0)" class="icon">
		<div class="hamburger">
			<div class="menui top-menu"></div>
			<div class="menui mid-menu"></div>
			<div class="menui bottom-menu"></div>
		</div>
	</a>
	
	<a name="top"></a>
	
	<header>
		<h1><a href="<?php echo site_url('/'); ?>"><img src="<?php bloginfo('stylesheet_directory') ?>/img/DS_Logo_700x318.png" alt="Dot Squirrels Logo" /></a></h1>
	</header>

	<div class="container" id="gradient">
