<?php
/*
Template Name: Tag Archive
*/
?>
<?php get_header(); ?>

	<!-- Recent Work -->

	<h2>Work Examples:<br/><?php single_tag_title(); ?></h2>
	<div class="recent-work content">
		<ul class="work-examples">
			<?php

			$tag = get_queried_object();
			$blog_cat = get_category_by_slug('blog');
			
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
				'post_status' => 'publish',
				'category__not_in' => array($blog_cat->term_id),
				'tag' => $tag->slug,
			);
			$recent_work = new WP_Query($args);			

			if ($recent_work->have_posts()) {
				$post_counter == 0;
				while ($recent_work->have_posts()) {
					$post_counter++;
					$recent_work->the_post();
					$thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'square-clean-edge');
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
	
	<h2>Our Capabilities</h2>
	<div class="what_we_do content">
		<?php include_once('fragment-tags.php'); ?>
	</div>

<?php get_footer(); ?>