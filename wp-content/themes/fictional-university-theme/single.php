<?php 

  get_header();
  
  while(have_posts()) {
    the_post(); ?>
    
    <!--Below this, we are in HTML mode-->
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <hr>
    <!--Above this, we are in HTML mode-->
    
  <?php }

  get_footer();
  
?>