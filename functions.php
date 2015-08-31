<?php

/* SHORTCODES */

function icon_li($atts, $content = null) {
    $a = shortcode_atts(array(
        'icon' => 'code'
    ), $atts);
	return '<li><i class="fa fa-'.$a['icon'].' fa-5x"></i><span>'.$content.'</span></li>';
}
add_shortcode( 'li', 'icon_li' );

/* CUSTOM IMAGE PROCESSING */

add_image_size('square-rough-edge', 389, 389, true);
add_filter('wp_generate_attachment_metadata','mask_rough_square');

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
	$file = basename($file).'-masked.png';
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

?>