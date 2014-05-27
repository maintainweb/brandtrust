<?php

$posts = get_field('sidebar_items');

if( $posts ): ?>
    <ul>
    <?php foreach( $posts as $post): ?>
        <?php setup_postdata($post); ?>
        <li><a href="<?php the_permalink(); ?>">
            <?php
              if ( has_post_thumbnail() ) {
                the_post_thumbnail();
              }
              ?>
            </a>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span>Custom field from $post: <?php the_field('short_excerpt'); ?></span>
            <span>Custom field from $post: <?php the_field('link_text'); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>