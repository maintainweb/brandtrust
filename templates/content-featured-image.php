<?php
$size = 'full';
$class = 'img-responsive';
if ( has_post_thumbnail() ) {
  the_post_thumbnail($size, array('class' => $class));
}
?>