<?php
function my_theme_enqueue_styles() {

    $parent_style = 'mc_main';
    $parent_custom = 'parent_custom';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/main.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/main.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script( $parent_custom, get_template_directory_uri() . '/js/custom.js' );
    wp_enqueue_script( 'child-custom',
        get_stylesheet_directory_uri() . '/js/custom.js',
        array( $parent_custom ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

?>
