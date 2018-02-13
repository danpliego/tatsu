<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="" width="190"></a>
    <h6 class="brand-info">
      Artist
      <span class="tatsu-red">/</span>
      Illustrator
      <span class="tatsu-red">/</span>
      Art Director
    </h6>
    <div class="menu-dots"></div>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <ul class="social-menu list-unstyled">
      <li><a href="https://www.instagram.com/tatsunocatsup/"><img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.png" alt="" width="24"></a></li>
      <li><a href="https://www.facebook.com/Tatsu-Beltr%C3%A1n-1140330752770436/"><img src="<?php bloginfo('template_url'); ?>/assets/images/facebook.png" alt="" width="20"></a></li>
    </ul>
  </div>
</header>
