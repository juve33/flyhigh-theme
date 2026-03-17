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



function flyhigh_register_block_styles() {

    $version = wp_get_theme()->get( 'Version' );

    $blocks = array(
        array( 'core', 'buttons'),
        array( 'core', 'cover'),
        array( 'core', 'group'),
        array( 'core', 'heading'),
        array( 'core', 'navigation'),
        array( 'core', 'navigation-link'),
        array( 'core', 'navigation-submenu'),
        array( 'core', 'pagelist'),
        array( 'core', 'paragraph'),
    );

    foreach ( $blocks as $block ) :

        wp_enqueue_block_style( $block[0] . '/' . $block[1], array(
            'handle' => 'flyhigh-' . $block[0] . '-' . $block[1],
            'src'    => get_theme_file_uri( "assets/css/blocks/" . $block[0] . "-" . $block[1] . ".css" ),
            'ver'  => $version,
            'media'  => 'all',
            'path'   => get_theme_file_path( "assets/css/blocks/" . $block[0] . "-" . $block[1] . ".css" ),
        ) );

    endforeach;
    
}

add_action( 'init', 'flyhigh_register_block_styles' );



function flyhigh_register_scripts() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script( 'flyhigh-jquery', 'https://code.jquery.com/jquery-4.0.0.min.js', array(), '4.0.0', true );

    $scripts = array(
        'main',
        'navigation',
    );

    foreach ( $scripts as $script ) :
        wp_enqueue_script( 'flyhigh-' . $script, get_template_directory_uri() . '/assets/js/' . $script . '.js', array(), $version, true );
    endforeach;

}

add_action('wp_enqueue_scripts', 'flyhigh_register_scripts');



function flyhigh_replace_nav_icon($block_content, $block) {

    if ($block['blockName'] !== 'core/navigation') {
        return $block_content;
    }

    libxml_use_internal_errors(true);

    $dom = new DOMDocument();
    $dom->loadHTML(
        '<?xml encoding="utf-8" ?>' . $block_content,
        LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
    );

    $xpath = new DOMXPath($dom);

    // Custom icons
    static $open_svg = '
        <svg viewBox="0 0 24 24" class="flyhigh-menu-icon" xmlns="http://www.w3.org/2000/svg">
            <style>
                text {
                    font-family: inherit;
                    font-size: 5.5px;
                    font-weight: normal;
                }
            </style>

            <path d="M 3 4 h 18 M 3 9 h 18 M 3 14 h 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            <text x="2" y="22" textLength="20">MENU</text>
        </svg>
    ';

    static $close_svg = '
        <svg viewBox="0 0 24 24" class="flyhigh-menu-icon" xmlns="http://www.w3.org/2000/svg">
            <path d="M 6 6 l 12 12 M 18 6 l -12 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
    ';

    // Replace open button icon
    $open_buttons = $xpath->query("//*[contains(@class,'wp-block-navigation__responsive-container-open')]");

    foreach ($open_buttons as $button) {
        while ($button->firstChild) {
            $button->removeChild($button->firstChild);
        }
        $fragment = $dom->createDocumentFragment();
        $fragment->appendXML($open_svg);
        $button->appendChild($fragment);
    }

    // Replace close button icon
    $close_buttons = $xpath->query("//*[contains(@class,'wp-block-navigation__responsive-container-close')]");

    foreach ($close_buttons as $button) {
        while ($button->firstChild) {
            $button->removeChild($button->firstChild);
        }
        $fragment = $dom->createDocumentFragment();
        $fragment->appendXML($close_svg);
        $button->appendChild($fragment);
    }

    return $dom->saveHTML();

}

add_filter('render_block_core/navigation', 'flyhigh_replace_nav_icon', 10, 2);



function flyhigh_replace_submenu_icon($block_content, $block) {

    if ($block['blockName'] !== 'core/navigation-submenu') {
        return $block_content;
    }

    libxml_use_internal_errors(true);

    $dom = new DOMDocument();
    $dom->loadHTML(
        '<?xml encoding="utf-8" ?>' . $block_content,
        LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
    );

    $xpath = new DOMXPath($dom);

    // Custom icons
    static $open_svg = '
        <svg viewBox="0 0 24 24" class="flyhigh-menu-icon" xmlns="http://www.w3.org/2000/svg">
            <path d="M 3 4 h 18 M 3 9 h 18 M 3 14 h 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
    ';

    // Replace open button icon
    $open_buttons = $xpath->query("//*[contains(@class,'wp-block-navigation-submenu__toggle')]");

    foreach ($open_buttons as $button) {
        while ($button->firstChild) {
            $button->removeChild($button->firstChild);
        }
        $fragment = $dom->createDocumentFragment();
        $fragment->appendXML($open_svg);
        $button->appendChild($fragment);
    }

    return $dom->saveHTML();

}

//add_filter('render_block_core/navigation-submenu', 'flyhigh_replace_submenu_icon', 10, 2);

?>