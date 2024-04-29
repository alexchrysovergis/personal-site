<?php get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">
  <div class="row">
    <div class="col col-12">
      <h1 class="text-center main_title"><?php the_title(); ?></h1> 
      <p><?php the_content(); ?></p>
      <hr>
    </div>
  </div>
</div>

<?php endwhile; endif; 
get_footer(); ?>