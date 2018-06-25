<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
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
