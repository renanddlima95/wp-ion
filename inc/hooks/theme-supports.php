<?php 
/**
 * 
 * Aruivo de manipulação de suportes do template
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

/**
 * Adiciona suporte a tag title
 */
add_theme_support( 'title-tag' );

/**
 * Adiciona suporte a posts thumbnails
 */
add_theme_support( 'post-thumbnails' );

/**
 * Adiciona suporte a automatic feed links
 */
add_theme_support( 'automatic-feed-links' );

/**
 * Adiciona suporte a posts formats
 */
add_theme_support( 'post-formats', array( 'video', 'gallery', 'audio', 'quote', 'link' ) );

/**
 * Adiciona suporte a tags html5
 */
add_theme_support(
    'html5',
    array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'widgets',
    )
);

/**
 * Remove a meta tag WP Generator
 */
remove_action( 'wp_head', 'wp_generator' );

/**
 * Remove a meta tag XML RPC
 */
remove_action('wp_head', 'rsd_link');

/**
 * Remove os scripts de emoji do WordPress
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Adiciona classes a tag li dos menus de navegação
 */
function wp_ion_menu_classes($classes, $item, $args) {

    $classes[] = 'nav-item';
    
    return $classes;
}

add_filter('nav_menu_css_class', 'wp_ion_menu_classes', 1, 3);

/**
 * Adiciona classes na tag âncora dos menus de navegação
 */
function wp_ion_menu_add_class( $atts, $item, $args ) {
    
    $atts['class'] = 'nav-link';
    
    return $atts;
}

add_filter( 'nav_menu_link_attributes', 'wp_ion_menu_add_class', 10, 3 );

/**
 * Altera o tamanho padrão da função excerpt
 */
function custom_excerpt_length( $length ){

    return 28;

}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/**
 * Remove o campo url do formulário de comentários
 */
function ion_remove_website_field( $fields ) {
	unset( $fields['url'] );
	return $fields;
}

add_filter( 'comment_form_default_fields', 'ion_remove_website_field' );
