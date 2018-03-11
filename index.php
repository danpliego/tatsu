<?php get_template_part('templates/page', 'header'); ?>

<div class="text-center"><img class="alignnone size-full wp-image-40" src="http://danielpliego.com/tatsu/wp-content/uploads/2018/02/home.png" alt="" width="530" /></div>
<h6></h6>
&nbsp;
<p style="text-align: center;"><strong>Cuando nací, iba a saludar al mundo y me recibieron con una nalgada.</strong></p>
<p style="text-align: center;">Aquí encontrarán un poquito de lo que hago y quizá un poquito menos de lo que soy, bienvenidos y gracias por darse una vuelta para checar mis rayones.</p>
<p style="text-align: center;">Aún hay cosas por agregar, pero ya hay al menos una pequeña tira en la sección de cómics y otras cosas lindas. La tienda aún parece Oxxo pirata de carretera pero pronto habrá cosas interesantes que puedan adquirir.</p>

<div class="menu-dots"></div>
<h1 class="text-center">NEWS</h1>
<div class="menu-dots"></div>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
