<header class="banner navbar navbar-default" role="banner">
  <div class="">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>
    <div class="nav-wrap">
      <nav class="" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
