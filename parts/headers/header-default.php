<?php 
/**
 * 
 * Cabeçalho padrão, traz todas as informações contidas no início do documento html, até o h1
 * 
 * @package wp-ion
 * @since 1.0.0
 * 
 */?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <?php wp_head();?>
    </head>
    <body class="bg-ion">
        <?php 
        /**
         * Request da barra de navegação superior
         */
        wp_ion_request_snippet( 'nav', 'top' );

        /**
         * Request do banner incial de acordo com a solicitação
         */
        if( is_front_page() ):
            wp_ion_request_snippet( 'banner', 'frontpage' );
        elseif( is_home() ):
            wp_ion_request_snippet( 'banner', 'blog' );
        elseif( is_page() ):
            wp_ion_request_snippet( 'banner', 'page' );
        elseif( is_search() ):
            wp_ion_request_snippet( 'banner', 'search' );
        elseif( is_404() ):
            wp_ion_request_snippet( 'banner', '404' );
        elseif( is_archive() || is_tag() ):
            wp_ion_request_snippet( 'banner', 'archives' );
        elseif( is_singular() ):
            wp_ion_request_snippet( 'banner', 'singular' );
        endif;
