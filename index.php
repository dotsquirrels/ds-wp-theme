<?php get_header(); ?>

<h2><?php the_post(); the_title(); ?></h2>
<div class="rough-edge"></div>

<div class="work-detail-container">

	<?php the_content(); ?>

	<ul class="work-detail-share-icons">
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a></li>
		<li><a href="https://twitter.com/intent/tweet?status=<?php echo urlencode(get_the_title()); ?>+<?php echo urlencode(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a></li>
		<li><a href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus-square fa-3x"></i></a></li>
	</ul>

	<?php

	$post_tags = get_the_tags();
	if ($post_tags) {
		echo '<ul class="work-detail-tags">';
		foreach($post_tags as $tag) {
			echo '<li><p><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a><i class="fa '.get_field('icon_class', 'post_tag_'.$tag->term_id).'"></i></p></li>';
		}
		echo '</ul>';
	}		

	?>

</div>

<?php get_footer(); ?>