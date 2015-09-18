<?php get_header(); ?>

<h2>Tips & Rants</h2>
<div class="rough-edge"></div>

<div class="blog-container">

	<?php if (have_posts()) { while (have_posts()) {

		the_post(); 
		$thumbnail_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');

		?><div class="basic-content">
			<div class="basic-content-hero">
				<a href="<?php the_permalink(); ?>"><img class="basic-hero" src="<?php echo $thumbnail_image[0]; ?>" alt="<?php the_title(); ?>" /></a>
			</div>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="basic-content-excerpt"><?php echo get_the_excerpt(); ?></p>
			<p class="basic-content-date"><?php the_date('F j, Y'); ?></p> 
		</div>

		<?php
	
		$post_tags = get_the_tags();
		if ($post_tags) {
			echo '<ul class="work-detail-tags">';
			foreach($post_tags as $tag) {
				echo '<li><p><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a><i class="fa fa-tag"></i></p></li>';
			}
			echo '</ul>';
		}		
	
		?>

		<hr><?php

	}} ?>

	<!--
	<ul class="blog-content-navigation">
		<li class="older-posts"><a href="javascript:void(0);"><i class="fa fa-caret-left"></i>OLDER</a></li>
		<li><a href="javascript:void(0);">1</a></li>
		<li><a href="javascript:void(0);">2</a></li>
		<li><a href="javascript:void(0);">3</a></li>
		<li><a href="javascript:void(0);">4</a></li>
		<li><a href="javascript:void(0);">&hellip;</a></li>
		<li><a href="javascript:void(0);">12</a></li>
		<li><a href="javascript:void(0);">13</a></li>
		<li class="newer-posts"><a href="javascript:void(0);">NEWER<i class="fa fa-caret-right"></i></a></li>
	</ul>
	//-->
	
</div>

<?php get_footer(); ?>