<?php
        $image = get_field('thumbnail');

        if( !empty($image) ):

          // vars
          $url = $image['url'];
          $title = $image['title'];
          $alt = $image['alt'];
          $caption = $image['caption'];

          // thumbnail
          $size = 'thumbnail';
          $thumb = $image['sizes'][ $size ];
          $width = $image['sizes'][ $size . '-width' ];
          $height = $image['sizes'][ $size . '-height' ]; ?>

    <div class="thumbnail-image">
      <div class="thumbnail-inner">
          <img class="img-responsive" src="<?php echo $thumb; ?>">
      </div>
    </div>
<?php endif; ?>