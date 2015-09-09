<?php

add_theme_support('post-thumbnails'); 

/* SHORTCODES */

function icon_li($atts, $content = null) {
    $a = shortcode_atts(array(
        'icon' => 'code',
        'size' => '5'
    ), $atts);
	return '<li><span class="li-icon"><i class="fa fa-'.$a['icon'].' fa-'.$a['size'].'x"></i></span><span class="li-text">'.$content.'</span></li>';
}
add_shortcode('li', 'icon_li');

function bio_card($atts, $content = null) {
    $default_image = get_bloginfo('stylesheet_directory').'/img/default-bio-photo.png';
    $a = shortcode_atts(array(
        'name' => 'Name',
        'title' => 'Title',
        'photo' => $default_image
    ), $atts);
	$image_id = get_image_id_by_url($a['photo']);
	if ($image_id) {
		$image_src = wp_get_attachment_image_src($image_id, 'square-rough-edge')[0];
	} else {
		$image_src = $default_image;
	}
	return '
	<ul class="about-us-profile">
		<li class="headshot"><img src="'.$image_src.'" alt="'.$a['name'].'" /></li>
		<li class="name">'.$a['name'].'</li>
		<li class="title">'.$a['title'].'</li>
		<li class="blurb">'.$content.'</li>
	</ul>
	';
}
add_shortcode('bio', 'bio_card');

function render_divider($atts, $content = null) {
	return '<div class="rough-edge"></div>';
}
add_shortcode('divider', 'render_divider');

/* CUSTOM IMAGE PROCESSING */

add_image_size('square-rough-edge', 389, 389, true);
add_filter('wp_generate_attachment_metadata','mask_rough_square');

add_filter('image_size_names_choose', 'add_custom_sizes');
function add_custom_sizes($sizes) {
    return array_merge( $sizes, array(
        'square-rough-edge' => __('Square, Rough Edge'),
    ) );
}

function mask_rough_square($meta) {
	$file = $meta['sizes']['square-rough-edge']['file'];
	$meta['sizes']['square-rough-edge']['file'] = do_masked_square_filter($file);
	return $meta;
}

function do_masked_square_filter($file) {
	$dir = wp_upload_dir();
	$image = imagecreatefromfile(trailingslashit($dir['path']).$file);
	$mask = imagecreatefrompng(get_stylesheet_directory().'/img/rough-edge-mask.png');
	$original = trailingslashit($dir['path']).$file;
	imagealphamask($image, $mask);
	$filename_info = pathinfo($file);
	$file = $filename_info['filename'].'-masked.png';
	$dest = trailingslashit($dir['path']).$file;
	imagepng($image, $dest);
	unlink($original);
	return $file;
}

function imagealphamask(&$picture, $mask) {
	$x_size = imagesx($picture);
	$y_size = imagesy($picture);
	$masked = imagecreatetruecolor($x_size, $y_size);
	imagesavealpha($masked, true);
	imagefill($masked, 0, 0, imagecolorallocatealpha($masked, 0, 0, 0, 127));
	// Perform pixel-based alpha map:
	for($x = 0; $x < $x_size; $x++) {
		for($y = 0; $y < $y_size; $y++) {
			$alpha = imagecolorsforindex($mask, imagecolorat($mask, $x, $y));
			$alpha = 127 - floor($alpha['red']/2);
			$color = imagecolorsforindex($picture, imagecolorat($picture, $x, $y));
			imagesetpixel($masked, $x, $y, imagecolorallocatealpha($masked, $color['red'], $color['green'], $color['blue'], $alpha));
		}
	}
	imagedestroy($picture);
	$picture = $masked;
}

function imagecreatefromfile($filename) {
	if (!file_exists($filename)) {
		throw new InvalidArgumentException('File "'.$filename.'" not found.');
	}
	switch (strtolower(pathinfo($filename, PATHINFO_EXTENSION))) {
		case 'jpeg':
		case 'jpg':
			return imagecreatefromjpeg($filename);
			break;		
		case 'png':
			return imagecreatefrompng($filename);
			break;
		case 'gif':
			return imagecreatefromgif($filename);
			break;
		default:
			throw new InvalidArgumentException('File "'.$filename.'" is not valid jpg, png or gif image.');
			break;
	}
}

function get_image_id_by_url($url) {
	global $wpdb;
	$url = preg_replace('/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $url);
	return $wpdb->get_var("SELECT ID FROM {$wpdb->posts} WHERE BINARY guid='$url'");
}

?>