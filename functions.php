<?php

function flyhigh_theme_support() {

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );

    remove_theme_support('core-block-patterns');

}

add_action('after_setup_theme', 'flyhigh_theme_support');



function flyhigh_custom_mime_types( $mimes ) {
	
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'flyhigh_custom_mime_types' );



function flyhigh_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    
    $stylesheets = array(
        'main',
        'variables',
        'header',
        'blocks',
        'footer',
    );

    foreach ( $stylesheets as $stylesheet ) :
        wp_enqueue_style( 'flyhigh-' . $stylesheet, get_template_directory_uri() . '/assets/css/' . $stylesheet . '.css', array(), $version, 'all' );
    endforeach;



    if ( ! function_exists( 'is_plugin_active' ) ) {
        require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }
    
    $plugin_stylesheets = array(
    );

    foreach ( $plugin_stylesheets as $plugin_stylesheet ) :
        if ( is_plugin_active( $plugin_stylesheet[1] ) ) {
            wp_enqueue_style( 'flyhigh-' . $plugin_stylesheet[0], get_template_directory_uri() . '/assets/css/' . $plugin_stylesheet[0] . '.css', array(), $version, 'all' );
        }
    endforeach;

}

add_action('wp_enqueue_scripts', 'flyhigh_register_styles');

?>