<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); 


$slug = get_post_field( 'post_name')
    ?>
  <?php get_template_part('templates/content-page', $slug); ?>
<?php endwhile; ?>
