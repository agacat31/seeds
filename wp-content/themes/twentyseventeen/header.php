<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="">
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="author" content="Seeds" />

  <meta property="og:site_name" content="" />
  <meta property="og:site" content="" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:type" content="" />

  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:site" content="@username" />
  <meta name="twitter:creator" content="@username" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
  <meta name="twitter:image" content="" />

  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Custom fonts -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/tether.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Vendors -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/images-gallery/component.css" />
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/images-gallery/modernizr.custom.js"></script> 
  <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/parallax/parallax.min.js"></script> -->
  <!-- <script src="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/pace/pace.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets-child/vendor/pace/pace-theme-center-circle.css" /> -->
  
  <!-- Custom styles -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets-child/css/animate.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/assets-child/css/style.min.css" rel="stylesheet" type="text/css">

  <?php wp_head(); ?>

</head>

<body id="page-top" <?php body_class(); ?>>
  <div id="loader"></div>
  <div class="wrapper" style="display: none;">
    <!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets-child/img/logo.png" class="img-logo hidden-sm-down" />
          <span class=" hidden-md-up">Seeds</span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="./">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">White Paper</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Documentation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead parallax-window">
      <div class="bg-wrapper" data-src="<?php echo get_template_directory_uri(); ?>/assets-child/img/mainbg.png">
        <div class="layer"></div>
      </div>
      	<?php if ( is_front_page() ) : ?>
			<div class="container">
		        <div class="intro-text">
		          <h2 class="wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum</h2>
		          <h3 class="subtitle wow fadeInUp" data-wow-delay="0.7s">Lorem ipsum dolor siamet. Neque porro quisquam est qui <br> dolorem ipsum quia dolor sit amet, consectetur.</h3>
		          <br/>
		          <a class="btn btn-primary btn-xs text-uppercase btn-main wow fadeInUp" data-wow-delay="1s" href="#">White Paper</a>
		        </div>
		    </div>
		<?php else : ?>
			
		<?php endif; ?>
    </header>

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
