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
			<?php
			
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
				'post_status' => 'publish',
				'meta_query' => array(array('key' => 'wpcf-post_featured', 'value' => '1'))
			);
			$recent_work = new WP_Query($args);			

			if ($recent_work->have_posts()) {
				$post_counter == 0;
				while ($recent_work->have_posts()) {
					$post_counter++;
					$recent_work->the_post();
					$thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square-rough-edge');
					switch($post_counter) {
						case 1:
						case 4:
							$thumb_class = 'left';
							break;
						case 3:
						case 6:
							$thumb_class = 'right';
							break;
						default:
							$thumb_class = 'center';
					}
					?><li class="align-<?php echo $thumb_class; ?>">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_image[0]; ?>" alt="<?php the_title(); ?>" width="243" height="243" /></a>
						<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					</li><?php
				}

			}

			wp_reset_postdata();			
			
			?>
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
		<?php the_content(); ?>	
		<div class="center"><a href="<?php echo site_url('/about'); ?>" class="button">Meet The Team</a></div>
	</div>

<?php get_footer(); ?>