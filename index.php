<?php 
/**
 * 
 * Arquivo inicial do template, não exclua
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

// Request do cabeçalho padrão
wp_ion_request_part( 'header', 'default' );

//Request de content, de acordo com o tipo de solicitação do tema
if( is_front_page() ):
    wp_ion_request_part( 'content', 'frontpage' );
elseif( is_page() ):
    wp_ion_request_part( 'content', 'page' );
elseif( is_home() ):
    wp_ion_request_part( 'content', 'blog' );
elseif( is_search() ):
    wp_ion_request_part( 'content', 'search' );
elseif( is_404() ):
    wp_ion_request_part( 'content', '404' );
elseif( is_archive() || is_tag() ):
    wp_ion_request_part( 'content', 'archives' );
elseif( is_singular() ):
    wp_ion_request_part( 'content', 'singular' );
endif;

// Request do rodapé padrão
wp_ion_request_part( 'header', 'default' );
