<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,400,600|Oswald:400,700" rel="stylesheet">
  <!-- <link rel="stylesheet" href="/animate.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css"> -->
  <link rel="stylesheet" href="https://npmcdn.com/flickity@2.0/dist/flickity.min.css">
  <link rel="stylesheet" href="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js">




  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<!-- <header>
  <div class="container">
    <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div> 
</header> -->

