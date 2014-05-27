
          <?php $args = array (
              'post_type'              => 'client',
              'posts_per_page'         => '-1',
              'orderby'                => 'menu_order',
            );
            $query = new WP_Query( $args ); ?>
          <?php if (!have_posts()) : ?>
            <div class="alert alert-warning">
              <?php _e('Sorry, no results were found.', 'roots'); ?>
            </div>
          <?php endif; ?>

        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>

          <?php get_template_part('templates/content', 'client'); ?>

        <?php endwhile; ?>