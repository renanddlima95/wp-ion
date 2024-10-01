<?php 
/**
 * 
 * Arquivo de manipulação do Core do WordPress, muito cuidado ao editá-lo
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

// Chamada do arquivo de requests para parts
require_once get_template_directory() . '/inc/requests/request-parts.php';

// Chamada do arquivo de requests para snippets
require_once get_template_directory() . '/inc/requests/request-snippets.php';

// Chamada do arquivo de requests para snippets
require_once get_template_directory() . '/inc/requests/wp-ion-menus.php';
