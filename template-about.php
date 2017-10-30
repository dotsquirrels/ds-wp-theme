<?php
/*
Template Name: About
*/
?>
<?php get_header(); the_post(); ?>

<h2>About Us</h2>

<div class="rough-edge">&nbsp;</div>

<div class="about-container">

	<div class="atomic-header">
		<h3><?php the_field('atomic_header'); ?></h3>
		<div class="body">
			<?php the_field('atomic_content'); ?>
		</div>
	</div>

	<?php the_content(); ?>

</div>

<?php get_footer(); ?>