<?php 
/**
 * 
 * Arquivo inicial do template, não exclua
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

/**
 * Request do cabeçalho
 */
wp_ion_request_part( 'header', 'default' );

/**
 * Request do banner e de content, apenas para singular posts
 */
if( is_singular() ){
    wp_ion_request_snippet( 'banner', 'singular' );
    wp_ion_request_part( 'content', 'singular' );
}

/**
 * Request do rodapé
 */
wp_ion_request_part( 'footer', 'default' );
