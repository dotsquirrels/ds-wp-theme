<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<h2>About Us</h2>

<div class="rough-edge">&nbsp;</div>

<div class="about-container">

	<ul class="atomic-header">
		<li class="headline">
			<h3><?php echo types_render_field('atomic_headline'); ?></h3>
		</li>
		<li class="body">
			<?php echo types_render_field('atomic_content'); ?>
		</li>
		<li class="background"><img src="<?php bloginfo('stylesheet_directory') ?>/img/atomic-bg.png" /></li>
	</ul>

	<?php the_content(); ?>

</div>

<?php get_footer(); ?>