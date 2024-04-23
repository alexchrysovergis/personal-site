<!DOCTYPE html>
<html lang="en" class="overflow-hidden">
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
  <a class="position-fixed" id="open_preferences_center"><i class="material-icons cookie position-absolute">cookie</i></a>
  
</head>
<body <?php body_class(); ?>>

<header class="container-fluid main-menu d-flex align-items-center position-relative">

<a class="navbar-brand" href="<?php echo home_url(); ?>"><img class="alexx-website-logo mx-3" src="/alexchrysovergis/htdocs/wp-content/uploads/2024/04/alexx-web-logo.png" alt="Alexx Logo"></a>

<div class="ham-container d-flex justify-content-end vw-100">
  <a class="mx-3" href="#my-menu"><i class="material-icons menu-icon">menu</i></a>
</div>

<nav id="my-menu">
<?php
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'container' => false,
      'items_wrap' => '<ul>%3$s</ul>',
      'fallback_cb' => false
    ) );
  ?>
</nav>
</header>

<?php wp_body_open(); ?>

<main class="main">
