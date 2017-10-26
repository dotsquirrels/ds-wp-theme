<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

	<!-- Intro -->
	<h2>Development & Consulting</h2>
	<div class="intro_pitch content">
		<div class="pitch"><p>Blah blah blah an elevator pitch goes here that tells you why we’re different better cooler or whatever.</p></div>
		<div class="testimonial">
			<p>“Some kind of testimonial that drives the point home, from a representative of a reputable client.”<br/><span class="source">Someone, Reputable Client</span></p>
		</div>
	</div>

	<!-- Recent Work -->
	<!--
	<h2>Recent Work</h2>
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
	//-->
	
	<h2>Capabilities</h2>
	<div class="what_we_do content">

		<div class="blurb"><p>I want to say that you can click on a tag to see related work examples,<br/>and I'm sure there's a chill way to say that.</p></div>

		<a class="tag-button" href="./tag/amazon-web-services/"><i class="fa fa-code fa-2x"></i> <span>Tag Text</span></a>
		<a class="tag-button" href="./tag/amazon-web-services/"><i class="fa fa-code fa-2x"></i> <span>Tag Text</span></a>
		<a class="tag-button" href="./tag/amazon-web-services/"><i class="fa fa-code fa-2x"></i> <span>Tag Text</span></a>
		<a class="tag-button" href="./tag/amazon-web-services/"><i class="fa fa-code fa-2x"></i> <span>Tag Text</span></a>
		<a class="tag-button" href="./tag/amazon-web-services/"><i class="fa fa-code fa-2x"></i> <span>Tag Text</span></a>
		<a class="tag-button" href="./tag/amazon-web-services/"><i class="fa fa-code fa-2x"></i> <span>Tag Text</span></a>
		<a class="tag-button" href="./tag/amazon-web-services/"><i class="fa fa-code fa-2x"></i> <span>Tag Text</span></a>
		<a class="tag-button" href="./tag/amazon-web-services/"><i class="fa fa-code fa-2x"></i> <span>Tag Text</span></a>
		<a class="tag-button" href="./tag/amazon-web-services/"><i class="fa fa-code fa-2x"></i> <span>Tag Text</span></a>

	</div>

<?php get_footer(); ?>