<?php 

  get_header();
  
  while(have_posts()) {
    the_post(); ?>
    
    <!--Below this, we are in HTML mode-->
    <h1>This is a page, not a post</h1>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
    <hr>
    <!--Above this, we are in HTML mode-->
    
  <?php }

  get_footer();
  
?>