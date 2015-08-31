<?php
/*
Template Name: Capabilities
*/
?>
<?php get_header(); ?>

<h2>Capabilities</h2>

<div class="rough-edge">&nbsp;</div>

<div class="capabilities-container">

	<ul class="atomic-header">
		<li class="headline">
			<h3><?php echo types_render_field('atomic_headline'); ?></h3>
		</li>
		<li class="body">
			<?php echo types_render_field('atomic_content'); ?>
		</li>
		<li class="background"><img src="<?php bloginfo('stylesheet_directory') ?>/img/atomic-bg.png" /></li>
	</ul>
	
	<?php 
	
	$page_content = apply_filters('the_content', get_the_content());
	$page_content = str_replace(array('<h2>','</h2>'), array('</ul><h2>','</h2><ul class="capabilities-list">'), $page_content);
	$page_content = strip_tags($page_content, '<ul><li><i><span><h2>').'</ul>';
	$page_content = preg_replace('/<\/ul><h2>/', '<h2>', $page_content, 1);
	
	echo $page_content;
	
	?>

</div>

<?php get_footer(); ?>