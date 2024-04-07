<?php get_header(); ?>

<div class="container-fluid p-0">
  <!-- Slider main container -->
  <?php if( have_rows('home_banner_repeater') ): ?>
    <div class="swiper">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php while ( have_rows('home_banner_repeater') ) : the_row();
                $image = get_sub_field('home_banner_image');
                $headline = get_sub_field('home_banner_headline');
                $text = get_sub_field('home_banner_text');
                $cta = get_sub_field('home_banner_cta');
            ?>
        <div class="swiper-slide">
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <h2 class="slide-heading"><?php echo esc_html($headline); ?></h2>
          <p class="slide-text"><?php echo esc_html($text); ?></p>
          <a href="<?php echo site_url("/about") ?>" class="slide-cta"><?php echo esc_html($cta); ?></a>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-pagination slideshow0 swiper-pagination-clickable swiper-pagination-bullets">
        <span class="swiper-pagination-bullet"></span>
      </div>
  </div>
  <?php endif; ?>

<?php get_footer(); ?>