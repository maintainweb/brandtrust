<?php
$videowidth = get_field('video_width');;
$videoheight = get_field('video_height');
$videomp4 = get_field('video_mp4');
 
if( !empty($videomp4) ): 
	$videomp4url = $videomp4['url'];
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
    <?php echo do_shortcode('[video width="'.$videowidth.'" height="'.$videoheight.'" mp4="'. $videomp4url.'" poster="'. $videoposterurl.'"][/video]'); ?>
</div>