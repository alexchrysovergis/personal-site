<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>

<?php wp_body_open(); ?>
<body class="position-relative">

  <main class="content" role="main">
    <div id="glitch-transition" class="d-flex justify-content-center align-items-center" aria-hidden="true">
    	<p id="crazy-paragraph">CONNECTING...</p>
    </div>
  	<div class="static-noise"></div>
