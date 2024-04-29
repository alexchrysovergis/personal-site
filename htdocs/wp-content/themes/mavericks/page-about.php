<?php get_header(); ?>

<section class="about-section">
  <section class="about-title container-fluid p-5 pb-3">
    <h1>Learn More About Alex.</h1>
  </section>
  <section class="about-arrow-headings container-fluid p-5 pt-3">
    <div class="row">
      <div class="col-12 col-md-6">
        <?php if( have_rows('about_repeater') ): ?>
          <?php while( have_rows('about_repeater') ): the_row();
            $about_title = get_sub_field('about_title');
            $about_paragraph = get_sub_field('about_paragraph');
            $about_index = get_row_index();
          ?>
        <h2 id="heading-<?php echo $about_index; ?>" class="py-3" data-target="#paragraph-<?php echo $about_index; ?>">
          <i class="material-icons arrow">keyboard_arrow_right</i>
          <?php echo esc_html($about_title); ?>
        </h2>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <div class="col-12 col-md-6">
        <?php if( have_rows('about_repeater') ): ?>
          <?php while( have_rows('about_repeater') ): the_row();
            $about_paragraph = get_sub_field('about_paragraph');
            $about_index = get_row_index(); // ACF function to get the current row number
          ?>
         <p id="paragraph-<?php echo $about_index; ?>" class="py-3 d-none">
            <?php echo esc_html($about_paragraph); ?>
          </p>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </div>
  </section>
</section>

<?php wp_footer(); ?>