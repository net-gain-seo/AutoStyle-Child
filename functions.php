<?php
if ( ! function_exists( 'as_setup' ) ) :
    function as_setup() {
        /**
         * Register navigation menus
         *
         * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
         */
        register_nav_menus( array( 'footer-menu' => 'Footer Menu' ) );


    } // end setup function
endif;
add_action( 'after_setup_theme', 'as_setup' );

function my_theme_enqueue_styles() {

    $parent_style = 'ns_main'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/main.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/main.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

?>
