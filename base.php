<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <style>
      html {
        margin-top: 0!important;
      }
    </style>
    <div class="wrap container-fluid" role="document">
      <div class="content row">
        <div class="sidebar">
          <div class="sidebar-content">
            <?php
              do_action('get_header');
              get_template_part('templates/header');
            ?>
            <?php if (Setup\display_sidebar()) : ?>
              <?php include Wrapper\sidebar_path(); ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="main">
          <div class="main-content">
            <div class="main-content-info">
              <?php include Wrapper\template_path(); ?>
            </div>
          </div>
          <div class="main-footer text-center">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/copy-right.png" alt="" width="700">
          </div>
        </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
  </body>
</html>
