<?php
$videowidth = get_field('video_width');;
$videoheight = get_field('video_height');
$videomp4 = get_field('video_mp4');
$videomov = get_field('video_mov');
$videotitle = get_field('video_title');

if( !empty($videomp4) ):
	$videomp4url = $videomp4['url'];
endif;

if( !empty($videomov) ):
	$videomovurl = $videomov['url'];
endif;

$videoposter = get_field('video_poster');

if( !empty($videoposter) ):

	// vars
	$videoposterurl = $videoposter['url'];
	$title = $videoposter['title'];
	$alt = $videoposter['alt'];
	$caption = $videoposter['caption'];

	// thumbnail
	$size = 'full';
	$thumb = $videoposter['sizes'][ $size ];
	$width = $videoposter['sizes'][ $size . '-width' ];
	$height = $videoposter['sizes'][ $size . '-height' ];
endif;
?>
<div class="video-shortcode">
		<h2 class="video-title"><?php echo $videotitle; ?></h2>
    <?php echo do_shortcode('[video width="'.$videowidth.'" height="'.$videoheight.'" mp4="'. $videomp4url.'" poster="'. $videoposterurl.'"][/video]'); ?>
</div>