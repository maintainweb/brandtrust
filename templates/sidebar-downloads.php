<?php
global $post;

$posts = get_field('download_items');

if( $posts ): ?>
    <ul>
    <?php foreach( $posts as $post): ?>
        <?php setup_postdata($post); ?>
        <?php
          $linktext = get_field('link_text');
          $shortexcerpt = get_field('short_excerpt');
          if( empty($linktext) ) {
            $linktext = "Download pdf now";
          }
        ?>
        <li>
            <div class="sidebar-thumbnail-wrapper">
              <a href="<?php the_permalink(); ?>">
              <?php get_template_part('templates/content', 'thumbnail-image'); ?>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>
            <p><?php echo $shortexcerpt; ?></p>
            <a href="<?php the_permalink(); ?>"><?php echo $linktext; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>