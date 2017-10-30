<div class="blurb"><?php the_field('capabilities_blurb', get_option('page_on_front')); ?></div>

<?php

$tag_args = array(
	'orderby' => 'count',
	'order' => 'DESC',
);
$tags_array = get_tags($tag_args);		

foreach ($tags_array as $tag) {
	if (!get_field('hide_homepage', 'post_tag_'.$tag->term_id)) {
	  echo '<a class="tag-button" href="'.get_tag_link($tag->term_id).'"><i class="fa '.get_field('icon_class', 'post_tag_'.$tag->term_id).' fa-2x"></i> <span>'.$tag->name.'</span></a>';
	}
}

?>