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
require_once get_template_directory() . '/inc/hooks/wp-ion-menus.php';

// Chamada do arquivo de suportes do tema
require_once get_template_directory() . '/inc/hooks/theme-supports.php';

// Chamada do arquivo de estilos e scripts
require_once get_template_directory() . '/inc/hooks/ion-scripts.php';

// Chamada do arquivo de lista de comentários
require_once get_template_directory() . '/inc/hooks/ion-comments.php';
