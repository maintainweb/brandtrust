<?php
        $media = get_the_ID();

        if( !empty($media) ):

          // vars
          $file = $media['file'];
          $title = $media['title'];
          $alt = $media['alt'];
          $caption = $media['caption'];

          // thumbnail
          $size = 'full';
          $thumb = $media['sizes'][ $size ];
          $width = $media['sizes'][ $size . '-width' ];
          $height = $media['sizes'][ $size . '-height' ]; ?>

  <div class="media-item">

  </div>
<?php endif; ?>