<?php 
/**
 * 
 * Modelo de página para blog
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
wp_ion_request_snippet( 'banner', 'home' );

/**
 * Request de content
 */
wp_ion_request_part( 'content', 'home' );

/**
 * Request do footer
 */
wp_ion_request_part( 'footer', 'default' );
