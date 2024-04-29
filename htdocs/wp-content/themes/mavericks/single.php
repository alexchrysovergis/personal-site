<?php get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<section class="single-post-section container-fluid text-white px-5 py-3">
  <div class="row">
    <div class="col col-12">
      <h1 class="text-center main_title"><?php the_title(); ?></h1>
      <?php the_post_thumbnail( 'large' ); ?>
      <hr>
      <p><?php the_content(); ?></p>
      <hr>
    </div>
  </div>
</section>

<?php endwhile; endif; 
get_footer(); ?>