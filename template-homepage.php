<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

	<!-- Recent Work -->
	<h2>Recent Work</h2>
	<div class="rough-edge"></div>
	<div class="recent_work content">
		<ul class="recent-work">
			<li class="align-left"><a href="/ds2015/blog/sample-post/"><img src="<?php bloginfo('stylesheet_directory') ?>/img/SketchbookSkool_243x243.png" alt="" /></a><p><a href="/ds2015/blog/sample-post/">Sketchbook Skool</a></p></li>
			<li class="align-center"><a href="/ds2015/blog/sample-post/"><img src="<?php bloginfo('stylesheet_directory') ?>/img/ShippingEasy_243x243.png" alt="" /></a><p><a href="/ds2015/blog/sample-post/">ShippingEasy</a></p></li>
			<li class="align-right"><a href="/ds2015/blog/sample-post/"><img src="<?php bloginfo('stylesheet_directory') ?>/img/SonyCES_243x243.png" alt="" /></a><p><a href="/ds2015/blog/sample-post/">Sony Electronics</a></p></li>
			<li class="align-left"><a href="/ds2015/blog/sample-post/"><img src="<?php bloginfo('stylesheet_directory') ?>/img/RPA_243x243.png" alt="" /></a><p><a href="/ds2015/blog/sample-post/">RPA</a></p></li>
			<li class="align-center"><a href="/ds2015/blog/sample-post/"><img src="<?php bloginfo('stylesheet_directory') ?>/img/WPA_243x243.png" alt="" /></a><p><a href="/ds2015/blog/sample-post/">World Poker Tour</a></p></li>
			<li class="align-right"><a href="/ds2015/blog/sample-post/"><img src="<?php bloginfo('stylesheet_directory') ?>/img/Rethinqk_243x243.png" alt="" /></a><p><a href="/ds2015/blog/sample-post/">Rethinqk</a></p></li>
		</ul>
	</div>
	
	<h2>What We Do</h2>
	<div class="rough-edge"></div>
	<div class="what_we_do content">
		<ul class="what-we-do">
			<?php echo strip_tags(apply_filters('the_content', types_render_field('hp-what-we-do', array('raw'=>'true'))), '<li><i><span>'); ?>
		</ul>
		<div class="center"><a href="<?php echo site_url('/capabilities'); ?>" class="button">&amp; Some Other Things</a></div>
	</div>
	
	<h2>Why We Do It</h2>
	<div class="rough-edge"></div>
	<div class="why_we_do_it content">
		<?php echo apply_filters('the_content', types_render_field('hp-why-we-do-it', array('raw'=>'true'))); ?>	
		<div class="center"><a href="<?php echo site_url('/blog'); ?>" class="button">Tips &amp; Rants</a></div>
	</div>
	
	<h2>Who We Are</h2>
	<div class="rough-edge"></div>
	<div class="who_we_are content">
		<?php echo apply_filters('the_content', types_render_field('hp-who-we-are', array('raw'=>'true'))); ?>	
		<div class="center"><a href="<?php echo site_url('/about'); ?>" class="button">Meet The Team</a></div>
	</div>

<?php get_footer(); ?>