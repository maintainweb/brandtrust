<?php
global $post;

$posts = get_field('sidebar_items');
$clientpage = 425;
$teampage = 426;

if (is_post_type_archive('client') || is_page_template('template-clients.php')) {
  $posts = get_field('sidebar_items', $clientpage);
}

if (is_post_type_archive('team') || is_page_template('template-team.php')) {
  $posts = get_field('sidebar_items', $teampage);
}

if( $posts ): ?>
    <ul>
    <?php foreach( $posts as $post): ?>
        <?php setup_postdata($post); ?>
        <?php
          $linktext = get_field('link_text');
          $shortexcerpt = get_field('short_excerpt');
          if( empty($linktext) ) {
            $linktext = "Learn more";
          }
        ?>
        <li>
            <div class="sidebar-thumbnail-wrapper">
              <a href="<?php the_permalink(); ?>">
              <?php
                if ( has_post_thumbnail() ) {
                  the_post_thumbnail();
                }
                ?>
              </a>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            </div>
            <p><?php echo $shortexcerpt; ?></p>
            <a href="<?php the_permalink(); ?>"><?php echo $linktext; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>