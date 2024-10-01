<?php 
/**
 * 
 * Arquivo responsável pelas requests de snippets do template
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */

/**
 * 
 * Function para resquests de snippets
 * 
 * $element - É o trecho designado ao que se está fazendo a request, exemplo: header, content,footer
 * [Importante lembrar que é sempre no singular]
 * $slug - É o contexto de diferenciação do que se está fazendo a request, exemplo: caso crie um header-second
 * 
 * @since 1.0.0
 * 
 */

function wp_ion_request_snippet( $element, $slug ){

    //Cria a versão de element no plural, para acessar a pasta
    $plural = $element . 's';

    // Chamada de part do template
    get_template_part( 'snippets/' . $plural . '/' . $element, $slug );

}
