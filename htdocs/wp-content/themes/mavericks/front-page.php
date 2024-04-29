<?php get_header(); ?>

<section class="homepage-slider container-fluid p-0">
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
        <div class="swiper-slide vh-100 position-relative text-center">
          <img class="position-absolute start-0 z-0 vh-100 w-100 h-auto object-fit-cover" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
          <div class="text-overlay d-flex flex-column justify-content-center align-items-center position-relative z-1 vh-100">
            <h2 class="slide-heading p-3 vw-100"><?php echo esc_html($headline); ?></h2>
            <p class="slide-text p-3"><?php echo esc_html($text); ?></p>
            <a href="<?php echo site_url("/about") ?>" class="slide-cta btn text-decoration-none px-5 py-3"><?php echo esc_html($cta); ?></a>
          </div>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-pagination slideshow0 swiper-pagination-clickable swiper-pagination-bullets">
        <span class="swiper-pagination-bullet"></span>
      </div>
  </section>
  <?php endif; ?>

<?php get_footer(); ?>