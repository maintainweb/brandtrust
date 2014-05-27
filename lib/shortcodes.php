<?php

// Add Shortcode
function accordion_shortcode( $atts , $content = null ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'id' => '',
      'class' => '',
    ), $atts )
  );
add_shortcode( 'accordion', 'accordion_shortcode' );
return '<p><a data-toggle="collapse" data-target="#' . $id . '" href="">More</a></p><div id="' . $id . '" class="collapse ' . $class . '">' . $content . '</div>';
}
add_shortcode( 'accordion', 'accordion_shortcode' );

// Add Quicktags
function accordion_quicktags() {

  if ( wp_script_is( 'quicktags' ) ) {
  ?>
  <script type="text/javascript">
  QTags.addButton( 'accordion', 'accordion', '[accordion id="unique-name" class="collapse"]', '[/accordion]', '', 'accordion', 1300 );
  </script>
  <?php
  }

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'accordion_quicktags' );





// Add Shortcode
function carousel_shortcode( $atts , $content = null ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'id' => '',
      'class' => '',
    ), $atts )
  );
return '<div id="#' . $id . '" class="carousel slide ' . $class . '" data-ride="carousel"><div class="carousel-inner">' . do_shortcode($content) . '</div></div>';
}
add_shortcode( 'carousel', 'carousel_shortcode' );

function carousel_item_shortcode( $atts , $content = null ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'class' => '',
    ), $atts )
  );
return '<div class="item ' . $class . '">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'item', 'carousel_item_shortcode' );


// Add Quicktags
function custom_quicktags() {

  if ( wp_script_is( 'quicktags' ) ) {
  ?>
  <script type="text/javascript">
  QTags.addButton( 'carousel', 'carousel', '[carousel id="myCarousel"]', '[/carousel]', '', 'carousel', 1000 );
  QTags.addButton( 'item', 'item', '[item class="active"]', '[/item]', '', 'item', 1000 );
  </script>
  <?php
  }

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'custom_quicktags' );



// ROW SHORTCODE
function row_shortcode( $atts , $content = null ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'class' => '',
    ), $atts )
  );
add_shortcode( 'row', 'row_shortcode' );
return '<div class="row ' . $class . '">' . $content . '</div>';
}
add_shortcode( 'row', 'row_shortcode' );

// Add Quicktags
function row_quicktags() {

  if ( wp_script_is( 'quicktags' ) ) {
  ?>
  <script type="text/javascript">
  QTags.addButton( 'row', 'row', '[row]', '[/row]', '', 'row', 1100 );
  </script>
  <?php
  }

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'row_quicktags' );


// COLUMN SHORTCODE
function column_shortcode( $atts , $content = null ) {

  // Attributes
  extract( shortcode_atts(
    array(
      'class' => '',
      'width' => '',
    ), $atts )
  );
add_shortcode( 'column', 'column_shortcode' );
return '<div class="col-sm-' . $width . ' ' . $class . '">' . $content . '</div>';
}
add_shortcode( 'column', 'column_shortcode' );

// Add Quicktags
function column_quicktags() {

  if ( wp_script_is( 'quicktags' ) ) {
  ?>
  <script type="text/javascript">
  QTags.addButton( 'column', 'column', '[column width="3"]', '[/column]', '', 'column', 1101 );
  </script>
  <?php
  }

}

// Hook into the 'admin_print_footer_scripts' action
add_action( 'admin_print_footer_scripts', 'column_quicktags' );