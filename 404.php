<?php 
/**
 * 
 * Modelo de página de erro 404
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

/**
 * Request de cabeçalho
 */
wp_ion_request_part( 'header', 'default' );

/**
 * Request do banner
 */
wp_ion_request_snippet( 'banner', '404' );

/**
 * Request de content
 */
wp_ion_request_part( 'content', '404' );

/**
 * Request do footer
 */
wp_ion_request_part( 'footer', 'default' );
