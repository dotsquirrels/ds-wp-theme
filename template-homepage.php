<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

	<!-- Intro -->
	<h2>Development & Consulting</h2>
	<div class="intro_pitch content">
		<div class="pitch"><?php the_field('elevator_pitch'); ?></div>
		<div class="testimonial">
			<p>“Some kind of testimonial that drives the point home, from a representative of a reputable client.”<br/><span class="source">Someone, Reputable Client</span></p>
		</div>
	</div>
	
	<h2>Capabilities</h2>
	<div class="what_we_do content">
		<?php include_once('fragment-tags.php'); ?>
	</div>

<?php get_footer(); ?>