<?php 
/**
 * 
 * Modelo de arquivamento
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
wp_ion_request_snippet( 'banner', 'archives' );

/**
 * Request de content
 */
wp_ion_request_part( 'content', 'archives' );

/**
 * Request do footer
 */
wp_ion_request_part( 'footer', 'default' );
