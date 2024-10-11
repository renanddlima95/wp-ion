<?php 
/**
 * 
 * Modelo de página inicial
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
wp_ion_request_snippet( 'banner', 'frontpage' );

/**
 * Request de content
 */
wp_ion_request_part( 'content', 'frontpage' );

/**
 * Request do footer
 */
wp_ion_request_part( 'footer', 'default' );
