<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
  <!-- Cookie Consent by TermsFeed https://www.TermsFeed.com -->
  <script type="text/javascript" src="//www.termsfeed.com/public/cookie-consent/4.1.0/cookie-consent.js" charset="UTF-8"></script>
  <script type="text/javascript" charset="UTF-8">
  document.addEventListener('DOMContentLoaded', function () {
  cookieconsent.run({"notice_banner_type":"headline","consent_type":"express","palette":"dark","language":"en","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false});
  });
  </script>
  <noscript>Free cookie consent management tool by <a href="https://www.termsfeed.com/">TermsFeed</a></noscript>
  <!-- End Cookie Consent by TermsFeed https://www.TermsFeed.com -->
  <!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->
  <a href="#" id="open_preferences_center">Update cookies preferences</a>

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light main-menu" role="navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="alexx-website-logo mx-3" src="/alexchrysovergis/htdocs/wp-content/uploads/2024/04/alexx-web-logo.png" alt="Alexx Logo"></a>
      <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarNav',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        
    </div>
</nav>

<?php wp_body_open(); ?>