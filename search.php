<?php 
/**
 * 
 * Modelo de página de busca interna
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
 * Request de content
 */
wp_ion_request_part( 'content', 'search' );

/**
 * Request do footer
 */
wp_ion_request_part( 'footer', 'default' );
