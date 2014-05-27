
          <?php $args = array (
              'post_type'              => 'client',
              'posts_per_page'         => '-1',
              'orderby'                => 'menu_order',
            );
            $query = new WP_Query( $args ); ?>

        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>



        <?php endwhile; ?>