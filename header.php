<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-------------- This is the mobile nav that will slide the entire site to the right. -------------->
<div id="closeNav" class="close-nav">Close <i class="fa fa-times"></i></button></div>
<nav id="mainNav" class="mobile-nav" role="navigation">
   <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
</nav>
<!--------------End Mobile Nav -------------->
<!-------------- This is the section that allows the entire site to slide right -------------->
<div id="bodyslide">
	<header class="site-header">
	    <div id="flexHeader" class="container flex-header padding0">

	        <div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="" width="370"></a></div>

	        <div class="header-block">
	            <div class="phone">
	                <p class="salesnum"><span>Call:</span><a href="tel:18562904601">888-456-7890</a></p>
	            </div>
	        </div>

	    </div>

	    <div class="header-nav">
	        <div class="container padding0">
	          <div class="stickylogo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="" width="370"></a></div>
	            <div class="mobile-icons">
                  <a href="https://www.google.ca/maps/place/Barrie,+ON/@44.3592406,-79.7357615,12z/data=!3m1!4b1!4m5!3m4!1s0x882aa3371ad7206d:0x1d2e0f00a84b535a!8m2!3d44.3893556!4d-79.6903316" target="_blank" class="nav-contact">
                      <i class="fa fa-map-marker"></i>
                      <span>MAP</span>
                  </a>
	                <a href="tel:18562904601" class="nav-phone">
	                    <i class="fa fa-phone"></i>
	                    <span>CALL</span>
	                </a>

	                <a href="<?php echo home_url(); ?>/contact/" class="nav-contact">
	                    <i class="fa fa-envelope"></i>
	                    <span>CONTACT</span>
	                </a>

	                <a href="javascript:void(0);" id="navToggle" class="nav-toggle">
	                    <i class="fa fa-bars"></i>
	                    <span>MENU</span>
	                </a>
	            </div>
	            <nav id="mainNav" class="main-nav" role="navigation">
	               <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
	            </nav>
	        </div>
	    </div>
	</header>

	<main>
