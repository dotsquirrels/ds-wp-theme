<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<h2>About Us</h2>

<div class="rough-edge">&nbsp;</div>

<div class="about-container">

	<div class="atomic-header">
		<h3><?php echo types_render_field('atomic_headline'); ?></h3>
		<div class="body">
			<?php echo types_render_field('atomic_content'); ?>
		</div>
	</div>

	<?php the_content(); ?>

</div>

<?php get_footer(); ?>